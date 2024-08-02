# Weather App

## Funcionalidades

- Previsão do tempo atual
- Previsão para os próximos dias
- Alternância de temas claro e escuro
- Escolha entre unidades Celsius e Fahrenheit

## Tecnologias Utilizadas

- HTML
- CSS (Tailwind CSS)
- JavaScript
- PHP
- WeatherAPI

## Configuração

Siga as instruções abaixo para configurar e executar o projeto em seu ambiente local.

### Pré-requisitos

- PHP 7.x ou superior
- Servidor web (Apache, Nginx, etc.)
- Chave API do WeatherAPI

### Passo a Passo

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/weather-app.git
   cd weather-app
    ```

2. **Instale as dependências:**

    Não há dependências externas além do Tailwind CSS que é carregado via CDN.

3. **Configure a chave API:**

    Crie um arquivo config.php no diretório config com o seguinte conteúdo:

    ```bash
        <?php
            return [
                'api_key' => 'SUA_CHAVE_API_AQUI',
            ];
    ```

4. **Inicie o servidor PHP:**

    ```bash
        php -S localhost:8000
    ```

5. **Acesse a aplicação:**

    ```bash
        Abra o navegador e vá para http://localhost:8000
    ```

### Uso

1. Digite o nome da cidade: No campo de entrada, digite o nome da cidade para a qual deseja obter a previsão do tempo.
2. Escolha a unidade de medida: Selecione entre Celsius ou Fahrenheit.
3. Clique no botão "Get Weather": A previsão do tempo será exibida abaixo.
4. Alternância de tema: Use o botão de alternância de tema para mudar entre os temas claro e escuro.