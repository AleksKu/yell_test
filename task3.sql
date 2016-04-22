SELECT
	`type`,
	`value`
FROM
	`data` AS data1
WHERE
	`date` = (
		SELECT
			max(`date`)
		FROM
			`data` AS data2
		WHERE
			data2.type = data1.type
	);