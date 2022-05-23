CREATE TABLE Annual_Gas_Data(
	Year integer NOT NULL,
	avg_production_Mmcf float NOT NULL,
	avg_consumption_Mmcf float NOT NULL,
	avg_vol_Mmcf float NOT NULL,
	avg_total_import_Mmcf float NOT NULL,
	avg_toal_export_Mmcf float NOT NULL,
	avg_import_price float NOT NULL,
	avg_export_price float NOT NULL,
	avg_all_grades_p float NOT NULL,
	avg_reg_p float NOT NULL,
	avg_midg_p float NOT NULL,
	avg_pre_p float NOT NULL,
	avg_dis_p float NOT NULL
);

CREATE TABLE Monthly_Gas_Data(
	Month integer NOT NULL,
	avg_production_Mmcf float NOT NULL,
	avg_consumption_Mmcf float NOT NULL,
	avg_vol_Mmcf float NOT NULL,
	avg_total_import_Mmcf float NOT NULL,
	avg_toal_export_Mmcf float NOT NULL,
	avg_import_price float NOT NULL,
	avg_export_price float NOT NULL,
	avg_all_grades_p float NOT NULL,
	avg_reg_p float NOT NULL,
	avg_midg_p float NOT NULL,
	avg_pre_p float NOT NULL,
	avg_dis_p float NOT NULL
);