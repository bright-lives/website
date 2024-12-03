import { __ } from '@wordpress/i18n';
import {RichText, useBlockProps} from '@wordpress/block-editor';

import {commonStyle} from "../__components__/common-style";
import {Button, Icon} from "@wordpress/components";
import {plus} from "@wordpress/icons";
import {style} from "./style";

export default function edit({attributes, setAttributes}) {

	const blockProps = useBlockProps({
		className: 'mt-20',
	});

	const updateFact = (index, key, value) => {
		const updatedFacts = [...attributes.facts];
		updatedFacts[index] = { ...updatedFacts[index], [key]: value };
		setAttributes({ facts: updatedFacts });
	};

	const addFact = () => {
		const newFact = { title: '', content: '' };
		setAttributes({ facts: [...attributes.facts, newFact] });
	};

	return (
		<div {...blockProps}>
			<section className={style.container}>
				{attributes.facts.map((fact, index) => (
					<>
						<div className={style.titleColumn}>
							<RichText
								tagName="h3"
								className={commonStyle.headings.column}
								value={fact.title}
								onChange={(value) => updateFact(index, 'title', value)}
								placeholder={__('Enter title here', 'custom-gutenberg-blocks')}
							/>
						</div>
						<div className={style.contentColumn}>
							<RichText
								tagName="p"
								value={fact.content}
								onChange={(value) => updateFact(index, 'content', value)}
								placeholder={__('Enter content here', 'custom-gutenberg-blocks')}
							/>
						</div>
					</>
				))}
			</section>
			<div className="flex justify-end">
				<Button
					onClick={addFact}
					className="h-10 w-10 shadow-custom-inset"
					icon={<Icon icon={plus} />}
				></Button>
			</div>
		</div>
	);
}
