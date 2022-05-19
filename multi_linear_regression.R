us_gas_data <- read.csv(file="us_gas_data.csv")

model <-lm(all_grades~ Gas_Production + Gas_Consumption + Import_price + Export_price + Total_Imports + 
             Total_Exports + regular + midgrade + premium + diesel + Volumn, data=us_gas_data)

summary(model)

a <- coef(model)[1]
print(a)

X_prod <- coef(model)[2]
X_cons <- coef(model)[3]
X_price_imp <- coef(model)[4]
X_price_exp <- coef(model)[5]
X_total_imp <- coef(model)[6]
X_total_exp <- coef(model)[7]
X_reg <- coef(model)[8]
X_mid <- coef(model)[9]
X_prem <- coef(model)[10]
X_dies <- coef(model)[11]
X_storage <- coef(model)[12]

# y = -0.000000005(Gas_Production) + 0.00000001(Gas_Consumption) + 0.00021(Import_Price) - 0.00017(Export_Price)
#        - 0.0000004(Total_Imports) - 0.00000003(Total_Exports) + 1.15(regular) - 0.804(midgrade) + 0.653(premium)
#        - 0.0085(diesel) + 0.00000001(Volume)

model_2 <- lm(all_grades~ Gas_Production + Gas_Consumption + Import_price + Export_price + Total_Imports + 
                Total_Exports + Volumn, data=us_gas_data) 
summary(model_2)

confint(model, conf.level=0.95)

plot(model)

model_3 <- lm(all_grades~ Year + Month + Gas_Production + Gas_Consumption + Import_price + Export_price + 
                Total_Imports + Total_Exports + regular + midgrade + premium + diesel + Volumn, data=us_gas_data)
summary(model_3)

model_4 <- lm(all_grades~ Year + Month, data=us_gas_data)
summary(model_4)

library(ggplot2)
ggplt <- ggplot(model_3, aes(x=Year, y=all_grades))+
  geom_point() + theme_classic()
ggplt

ggplt + geom_smooth(method=lm, se=FALSE, fullrange=TRUE)
