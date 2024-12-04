import { __ } from '@wordpress/i18n';
import {plus} from "@wordpress/icons";
import {Button, Icon, TextControl} from "@wordpress/components";
import {style} from "./style";
import {convertToLocalCurrency} from "./utils";
export default function edit({attributes, setAttributes}) {

	const addRow = () => {
		const newRow = { kind: '', item: '', amount: 0, unitPrice: 0 };
		setAttributes({ rows: [...attributes.rows, newRow] });
	}

	const updateItem = (index, key, value) => {
		const updatedRows = [...attributes.rows];
		updatedRows[index] = { ...updatedRows[index], [key]: value };
		setAttributes({ rows: updatedRows });
	};

	const totalPrice = attributes.rows.reduce((total, row) => total + (row.amount * row.unitPrice), 0);

	setAttributes({ totalPrice });

	return (
		<table className={style.table}>
			<thead>
			<tr className={style.theadTr}>
				<th className={style.th}>Soort</th>
				<th className={style.th}>Artikelen</th>
				<th className={style.th}>Aantal</th>
				<th className={style.th}>Stuk prijs</th>
				<th className={`${style.th} text-right`}>Subtotaal</th>
			</tr>
			</thead>
			<tbody>
			{attributes.rows.map((row, index) => (
				<tr className={style.tr}>
					<td className={style.td}>
						<TextControl
							label={__('Kind', 'custom-gutenberg-blocks')}
							value={row.kind}
							onChange={(value) => updateItem(index, 'kind', value)}
						/>
					</td>
					<td className={style.td}>
						<TextControl
							label={__('Item', 'custom-gutenberg-blocks')}
							value={row.item}
							onChange={(value) => updateItem(index, 'item', value)}
						/>
					</td>
					<td className={style.td}>
						<TextControl
							label={__('Amount', 'custom-gutenberg-blocks')}
							type="number"
							value={row.amount}
							onChange={(value) => updateItem(index, 'amount', value)}
						/>
					</td>
					<td className={`${style.td} tabular-nums`}>
						<TextControl
							label={__('Unit price', 'custom-gutenberg-blocks')}
							type="number"
							value={row.unitPrice}
							onChange={(value) => updateItem(index, 'unitPrice', value)}
						/>
					</td>
					<td className={`${style.tdSubTotal} ${style.numberFontFormatting}`}>
						{convertToLocalCurrency(row.amount * row.unitPrice)}
					</td>
				</tr>
			))}
			<tr>
				<td colSpan={5}>
					<Button
						onClick={addRow}
						className="h-10 w-full text-center shadow-custom-inset !justify-center"
						icon={<Icon icon={plus}/>}
					>{__('Add row', 'custom-gutenberg-blocks')}</Button>
				</td>
			</tr>
			<tr className={style.trTotal}>
				<td colSpan={4} className={style.tdTotalLabel}>Totaal</td>
				<td className={`${style.tdTotal} ${style.numberFontFormatting}`}>
					{convertToLocalCurrency(totalPrice)}
				</td>
			</tr>
			</tbody>
		</table>
	);
}
