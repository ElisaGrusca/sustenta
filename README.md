# Sustenta

O projeto "Sustenta" é um site dedicado à economia de água e à identificação de problemas relacionados à água, especialmente vazamentos. O objetivo principal é atender às necessidades dos moradores da cidade e regiões próximas, incentivando a participação ativa da comunidade para melhorias no fornecimento de água e saneamento. A missão do projeto é promover a inclusão das pessoas, dando-lhes voz para informar sobre problemas relacionados à água.

Se você tiver alguma preocupação sobre vazamentos de água ou deficiências no fornecimento de água em seu bairro ou região, sinta-se à vontade para compartilhá-las com o projeto. Seu feedback é valioso e pode contribuir para melhorar a situação em sua comunidade. O acesso justo e adequado à água é fundamental, e é nosso dever garantir que todos tenham acesso a esse recurso de forma justa e apropriada.

## Funcionalidades

1. **Relato de Problemas:** Os usuários podem relatar problemas relacionados à água, como vazamentos, escassez de água, qualidade da água, etc. Isso pode ser feito por meio de um formulário de envio.

2. **Localização de Problemas:** Os problemas relatados são plotados em um mapa interativo para que os visitantes possam ver onde estão ocorrendo os problemas.

3. **Comentários e Discussões:** Os usuários podem comentar sobre problemas relatados por outras pessoas, discutir soluções e compartilhar informações úteis.

4. **Recursos Educacionais:** Fornecemos informações educacionais sobre o uso responsável da água, dicas de conservação e práticas ambientalmente amigáveis.

5. **Recursos da Comunidade:** Listamos recursos e contatos úteis, como empresas de serviços de água, órgãos reguladores, organizações de conservação, etc.

6. **Campanhas de Conscientização:** Realizamos campanhas de conscientização sobre a importância da economia de água e da preservação dos recursos hídricos.

## Pré-requisitos

Para executar a aplicação, você precisa:

- Instalar o Visual Studio Code, caso não possua.
  - Acesse o site oficial do Visual Studio Code em [https://code.visualstudio.com/](https://code.visualstudio.com/).
  - Clique no botão "Download" para baixar o instalador do VS Code.
  - Execute o instalador e siga as instruções para concluir a instalação.

- Configurar as extensões para execução de HTML, CSS e JavaScript no Visual Studio Code.
  - Abra o Visual Studio Code.
  - Na barra lateral esquerda, clique no ícone de extensões.
  - Na caixa de pesquisa, digite "HTML" e pressione Enter.
  - Selecione uma extensão popular e confiável, como "HTML Preview" ou "Live Server," e clique em "Instalar."
  - Repita o mesmo processo para as extensões relacionadas a CSS e JavaScript que julgar necessário.

- Instalar o XAMPP para configurar um ambiente de desenvolvimento local.
  - Acesse o site oficial do XAMPP em [https://www.apachefriends.org/](https://www.apachefriends.org/).
  - Clique no botão "Download" para baixar o instalador do XAMPP.
  - Execute o instalador e siga as instruções para concluir a instalação.

## Como rodar a aplicação

1. Abra o Visual Studio Code e abra o projeto.

2. Configure o servidor local:
   - Abra o painel de controle do XAMPP.
   - Inicie os serviços do Apache e MySQL para criar um ambiente de desenvolvimento local.

3. Importe o arquivo SQL:
   - Acesse o phpMyAdmin em "http://localhost/phpmyadmin" no seu navegador.
   - Faça login no phpMyAdmin usando as credenciais do seu servidor MySQL local, se necessário.
   - Crie um novo banco de dados chamado "Sustenta."
   - Na página do banco de dados, clique na guia "Importar."
   - Selecione o arquivo "Sustenta.sql" e importe para o banco de dados.

4. Estabeleça a conexão:
   - Abra o arquivo "connect.php" no projeto usando o Visual Studio Code.
   - Verifique se as informações de conexão estão corretas, como o nome do servidor, usuário e senha do banco de dados. Se necessário, altere-os para corresponder às suas configurações locais do MySQL.

5. Abra o projeto no servidor local:
   - No navegador, digite "http://localhost/Sustenta-main/index.php" na barra de endereços e pressione Enter.

## Desenvolvedores e contribuintes

Para contribuir para o projeto, siga estas etapas:

1. Abra o Visual Studio.

2. Na janela inicial, selecione "Clonar um repositório."

3. Insira ou digite a localização do repositório e, em seguida, selecione o botão "Clonar."

4. Realize as alterações desejadas no código em seu desktop e faça as contribuições necessárias.

## Linguagens

- HTML: Utilizada para estruturar e criar os elementos da página web.
- CSS: Utilizada para estilizar e dar uma aparência visual ao site.

## Ferramentas

- XAMPP: Utilizado como ambiente de desenvolvimento local para executar o servidor Apache, MySQL e PHP.
- MySQL: Sistema de gerenciamento de banco de dados utilizado para armazenar os dados relacionados às reclamações dos munícipes.
- GitHub: Plataforma de hospedagem de código-fonte utilizada para versionamento e colaboração no projeto.

## IDE (Ambiente de Desenvolvimento Integrado)

- Visual Studio Code: Uma IDE popular e gratuita que oferece suporte a várias linguagens de programação, como HTML, CSS, JavaScript e PHP. O Visual Studio Code possui recursos úteis, como realce de sintaxe, depuração e extensibilidade, que auxiliam no desenvolvimento do projeto.

## Resolvendo Problemas

Iremos listar algumas dificuldades encontradas em nosso projeto e, conforme forem resolvidas, atualizaremos este documento:
- Como realizar um comentário sem ferir as leis do município.
- Atualização de informações aos munícipes sobre como utilizar a água.
- Conexão com o banco de dados.

## Design

No projeto do Site Sustenta, aplicamos princípios de User Experience (UX) para garantir uma interação intuitiva e inclusiva. Considerando as necessidades dos usuários, focamos em um design renovado e responsivo. Implementamos a mudança de cor dos botões ao passar o mouse para fornecer feedback visual claro. Nosso objetivo é oferecer uma experiência acessível, amigável e eficiente para todos os usuários. Utilizamos uma paleta de cores vibrantes e harmoniosas para transmitir uma sensação de energia e confiança. Adicionamos ícones e ilustrações personalizadas para tornar a navegação mais visual e agradável.

## Licença

MIT License
Copyright (c) 2023 MsC. Elielle Gabrisa

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS," WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE, AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES, OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT, OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
