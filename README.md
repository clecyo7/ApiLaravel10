- clone o projeto
- crie um banco de dados
- altere o arquivo env.example para .env
- execute o comando composer update
- php artisan key:generate
- php artisan jwt:secret
- apos criar o banco de dados execute o comando php artisan migrate --seed
- abra o postman para realização dos testes
- configure o postman da seguinte forma
- ![image](https://github.com/clecyo7/ApiLaravel10/assets/56848104/9cd7d87a-bcbb-4a7a-b0ee-f15c7d97145c)
- apos popular a tabela de usuarios escolha um email para realizar a autenticação no postman e gerar o token jwt
- ![image](https://github.com/clecyo7/ApiLaravel10/assets/56848104/a0ffcfa6-60be-4b5a-b807-6b51b71711d0)
- após gerar o token copie e cole no Autorization 
![image](https://github.com/clecyo7/ApiLaravel10/assets/56848104/f1e23e55-b034-4eec-82ef-bb1055403374)
- após isso acesse a rota http://127.0.0.1:8000/api/products/ ela ira trazer todos os produtos cadastrados do banco de dados
- ![image](https://github.com/clecyo7/ApiLaravel10/assets/56848104/4e8f7d99-cc1a-4e08-9655-bef86f1e9647)
- http://127.0.0.1:8000/api/products/{id} essa rota ira trazer os dados de um produto especifico de acordo com seu id
- para cadastrar altere para o método para post e preencha as informçãoes.
- ![image](https://github.com/clecyo7/ApiLaravel10/assets/56848104/41407b76-b727-4058-b794-93c4d553e97c)
- editar - passe o id desejado e o método put, de acordo com a imagem
- ![image](https://github.com/clecyo7/ApiLaravel10/assets/56848104/69106b92-cb25-47c9-b95c-c29f54f1c2b4)






