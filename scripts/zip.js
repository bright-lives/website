const AdmZip = require("adm-zip");
const fs = require("fs");
const path = require("path");

async function zipFolders() {
  try {
    // Ensure the ./__dist__ folder exists
    const distPath = path.resolve(__dirname, "../__dist__");
    if (!fs.existsSync(distPath)) {
      fs.mkdirSync(distPath);
    }

    // Define folders to zip and their output file names
    const foldersToZip = [
      { folder: "./bright-lives-theme", zipName: "bright-lives-theme.zip" },
      { folder: "./plugins/bright-lives-blocks", zipName: "bright-lives-blocks.zip" },
      { folder: "./plugins/bright-lives-hooks", zipName: "bright-lives-hooks.zip" },
    ];

    // Loop through each folder and create a separate ZIP file
    for (const { folder, zipName } of foldersToZip) {
      const zip = new AdmZip();
      zip.addLocalFolder(folder);

      const outputZipPath = path.join(distPath, zipName);
      zip.writeZip(outputZipPath);

      console.log(`Zipped successfully: ${folder} -> ${outputZipPath}`);
    }
  } catch (err) {
    console.error("Error while zipping folders:", err);
  }
}

zipFolders();
