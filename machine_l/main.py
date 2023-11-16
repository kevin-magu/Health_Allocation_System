import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestRegressor # low values
from sklearn.metrics import mean_absolute_error
from sklearn.tree import DecisionTreeRegressor # low values
from sklearn.neural_network import MLPRegressor # 162 - BEST
from sklearn.svm import SVR # low values
from sklearn.ensemble import GradientBoostingRegressor # low values
from sklearn.neighbors import KNeighborsRegressor # low values
import math


# read dataset
url = "/reported_numbers.csv"
df = pd.read_csv('files/malaria.csv')

# Display the first few rows of the dataset
df.head(10)
# Check for missing values
# print(df.isnull().sum())

# Handle missing values
df = df.dropna()

# Split the data into features (X) and target variable (y)
X = df[['Year', 'No. of cases']]  #these are features
y = df['No. of cases']  # Replace 'target_variable' with your actual target variable

# Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
df.head(10)
# Initialize the Decision Tree model
model = MLPRegressor(random_state=42)


# Train the model
model.fit(X_train, y_train)
predictions = model.predict(X_test)

# Evaluate the model
mae = mean_absolute_error(y_test, predictions)
# print(f'Neural Network Mean Absolute Error: {mae}')
# Provide new data (e.g., the year 2030) for prediction
new_data = pd.DataFrame({'Year': [2030], 'No. of cases': [300]})

# Use the trained model to predict the number of cases for the given year
prediction = round(model.predict(new_data)[0])

print(prediction)
 