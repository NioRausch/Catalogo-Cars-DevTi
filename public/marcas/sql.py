import mysql.connector
import os


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="carros"
)


arr = os.listdir()

mycursor = mydb.cursor()
sql = "INSERT INTO marcas (nome, img_path) VALUES (%s, %s)"

for path in arr:
    nome = path.split(".")[0]
    nome = nome.replace("-"," ").title()
    mycursor.execute(sql, (nome, "marcas/" + path))

mydb.commit()