import { registerBlockType } from '@wordpress/blocks';

import edit from './edit';
import save from './save';
import metadata from './block.json';

registerBlockType('bright-lives/column-project-costs-explainer', { edit, save });
