import mysql.connector

def get_books_from_database():
    try:
        connection = mysql.connector.connect(
            host="localhost",
            user="root",
            password="0000",
            database="sql_trabalho",
            port=3307
        )

        if connection.is_connected():
            cursor = connection.cursor(dictionary=True)
            sql = "SELECT * FROM Livro"
            cursor.execute(sql)
            result = cursor.fetchall()

            for row in result:
                print(f"ID: {row['id']} - Título: {row['titulo']} - Autor: {row['autor']}")

    except mysql.connector.Error as err:
        print(f"Erro de conexão MySQL: {err}")

    finally:
        if 'connection' in locals() and connection.is_connected():
            connection.close()

get_books_from_database()

def add_book_to_database(titulo, autor, preco, qtd_disponivel, status):
    try:
        connection = mysql.connector.connect(
            host="localhost",
            user="root",
            password="0000",
            database="sql_trabalho",
            port=3307
        )

        if connection.is_connected():
            cursor = connection.cursor()
            sql = f"INSERT INTO Livro (titulo, autor, preco, qtdDisponivel, status) VALUES ('{titulo}', '{autor}', {preco}, {qtd_disponivel}, {status})"
            cursor.execute(sql)
            connection.commit()
            print("Novo livro adicionado com sucesso!")

    except mysql.connector.Error as err:
        print(f"Erro de conexão MySQL: {err}")

    finally:
        if 'connection' in locals() and connection.is_connected():
            connection.close()

add_book_to_database("Novo Livro", "Autor Desconhecido", 25.0, 10, 1)