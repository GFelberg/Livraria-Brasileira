import mysql.connector

# Configurações do banco de dados
db_config = {
    "host": "localhost",
    "user": "root",
    "password": "0000",
    "database": "sql_trabalho",
    "port": "3307",  
}

try:
    # Conectar ao banco de dados
    connection = mysql.connector.connect(**db_config)

    if connection.is_connected():
        db_info = connection.get_server_info()
        print(f"Conectado ao servidor MySQL versão {db_info}")

except mysql.connector.Error as e:
    print(f"Erro de conexão MySQL: {e}")

#finally:
    # Fechar a conexão
   # if connection.is_connected():
       # connection.close()
       # print("Conexão encerrada.")
