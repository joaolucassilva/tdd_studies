# Test-Drive Development PHP

Este repositorio contem o codigo dos meus estudos apresentados no livro "Test-Driven Development PHP".
 Estou utilizando este repositorio para praticar e aplicar os conceitos de desenvolvimento orientados a testes apresentados no livro. 

 ## Sobre o Livro
 "Test-Driven Development PHP" é um guia completo sobre a metodologia de desenvolvimento orientado a testes aplicada à linguagem PHP. 

 ## Objetivo
 O objetivo deste repositorio e acompanhar e praticar os conceitos e exemplos abordados no livro, desenvolvimento minhas habilidades em TDD com PHP.

## Estrutura do Repositório
O repositório está organizado da seguinte forma:  

- `src/`: Contem os arquivos de codigo-fonte.
- `tests/`: Contém os arquivos de testes.
- `vendor/`: Contém as dependências gerenciadas pelo Composer.
- `README.md`: Este arquivo, contendo informações sobre o repositório.
- `composer.json`: Arquivo de configuração do Composer, gerenciador de dependências do PHP.
- `phpunit.xml`: Arquivo de configuração do PHPUnit, framework de testes para PHP.
- `.github/workflows/ci.yaml`: Arquivo de configuração da integração contínua com GitHub Actions.

## Requisitos
Para executar o código deste repositório, você precisará ter instalado:
- PHP 8.2 ou superior
- Composer

 ## Como Usar
 1. Clone este repositorio para o seu ambiente local:
    ```sh
    git clone https://github.com/joaolucassilva/tdd_studies.git
    ```
 3. Navegue ate o diretorio do projeto:
    ```sh
    cd tdd_studies
    ```
 5. Instale as dependencias do projeto usando o Composer:
    ```sh
    composer install
    ```
 7. Execute os testes para garantir que tudo esta funcionando corretamente:
    ```sh
    ./vendor/bin/phpunit
    ```

## Integração Contínua
Este repositório está configurado para usar GitHub Actions para integração contínua. 
O arquivo **.github/workflows/ci.yaml** define um workflow que executa os testes automaticamente a cada push. 
Isso garante que o código está sempre testado e funcionando corretamente.


