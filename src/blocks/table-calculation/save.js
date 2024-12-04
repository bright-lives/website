import {RichText} from '@wordpress/block-editor';
import {style} from "./style";
import {convertToLocalCurrency} from "./utils";

export default function save({attributes}) {

	const { rows, totalPrice } = attributes;

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
			{rows.map((row, index) => (
				<tr key={index} className={style.tr}>
					<td className={style.td}>{row.kind}</td>
					<td className={style.td}>{row.item}</td>
					<td className={style.td}>{row.amount}</td>
					<td className={style.td}>{row.unitPrice}</td>
					<td className={style.tdSubTotal}>{convertToLocalCurrency(row.amount * row.unitPrice)}</td>
				</tr>
			))}
			<tr className={style.trTotal}>
				<td colSpan={4} className={style.tdTotalLabel}>Totaal</td>
				<td className={`${style.tdTotal} ${style.numberFontFormatting}`}>{convertToLocalCurrency(totalPrice)}</td>
			</tr>
			</tbody>
		</table>
	);
}
