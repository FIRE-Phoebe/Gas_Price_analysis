CREATE TABLE US_Natural_Gas_Imports_Exports(
	Year integer NOT NULL,
	Month integer NOT NULL,
	Import_price float NOT NULL,
	Export_price float NOT NULL,
	Total_Imports integer NOT NULL,
	Total_Exports integer NOT NULL
);

CREATE TABLE price_by_type(
	Year integer NOT NULL,
	Month integer NOT NULL,
	all_grades float NOT NULL,
	regular float NOT NULL,
	midgrade float NOT NULL,
	premium float NOT NULL,
	diesel float NOT NULL
);

CREATE TABLE storage_vol(
	Year integer NOT NULL,
	Month integer NOT NULL,
	volume_Mmcf float NOT NULL
);

CREATE TABLE supply_demand(
	Year integer NOT NULL,
	Month integer NOT NULL,
	gas_production integer NOT NULL,
	gas_consumption float NOT NULL
);

CREATE TABLE cali_all_form_retail_gas_price(
	Year integer NOT NULL,
	Month integer NOT NULL,
	price float NOT NULL
);
