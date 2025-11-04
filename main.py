from fastapi import FastAPI, Query
import requests

app = FastAPI()

@app.get("/")
async def root():
    return {"message": "Bem-vindo à API!"}

@app.get("/hello/{name}")
async def say_hello(name: str):
    return {"message": f"Olá, {name}!"}

@app.post("/items/")
async def create_item(item: dict):
    return {"message": "Item recebido", "item": item}

@app.get("/api/health")
def get_health():
    url = "https://gfelberg.github.io/Livraria-Brasileira"
    response = requests.get(url)
    return "Application is up!" if response.status_code == 200 else response.status_code

@app.get("/api/books")
def get_books(livro : str = Query(None)):
    url = "https://gfelberg.github.io/Livraria-Brasileira/dados/livros.json"
    response = requests.get(url)

    if response.status_code == 200:
        dados_json = response.json()
        if livro is None:
            return {"Dados": dados_json}
        
        dados_livros = []
        for item in dados_json:
            if item["nome"] == livro:
                dados_livros.append(
                    {
                        "nome": item["nome"],
                        "autor": item["autor"],
                        "genero": item["genero"],
                        "ano_publicacao": item["ano_publicacao"],
                        "preco": item["preco"]
                    }
                )
            return {"Livro": livro, "Informações": dados_livros}
        else:
            return {'Erro': f'{response.status_code} - {response.text}'}