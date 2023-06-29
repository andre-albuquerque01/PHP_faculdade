1. No contexto da programação orientada a objetos, explique o que é uma "interface". Como o que aparece no código do artigo: </br>

Uma interface é uma especificação de um conjunto de comportamentos esperados de uma classe, sem fornecer qualquer implementação concreta desses comportamentos. A implementação concreta dos métodos é deixada para as classes que implementam a interface. </br> </br>

2. O que são "traits" no PHP? </br>

Um trait é um conjunto de métodos que pode ser incluído em uma classe para fornecer comportamentos adicionais, sem precisar criar uma nova classe intermediária na hierarquia de herança. </br> </br>

3. No código aparece o método "bindValue" do PDO para definir o valor que será utilizado na execução da instrução SQL. No PDO, também existe o método "bindParam". Qual(is) a(s) diferença(s) entre eles? </br>

A principal diferença entre os métodos bindValue() e bindParam() é que o primeiro é mais simples e direto, enquanto o segundo é mais flexível e permite atualizar o valor da variável passada como parâmetro depois de criar a ligação com a instrução SQL. </br> </br>

4. No código é utilizada a função "__autoload()" que foi descontinuada ("deprecated") no PHP desde a versão 7.2.0 e foi removida no PHP 8.0.0. Reescreva o código para efetuar o autoload de classes na versão atual do PHP. </br>

	require_once $caminho_da_classe; </br>
    include_once $caminho_da_classe;
</br> </br>
5. Na tabela "contatos" a coluna "id" tem auto-incremento. Entretanto, o código implementado busca o próximo valor de "id" a ser  inserido usando um "SELECT MAX(ID) AS ID FROM {$this->tabela}". Reescreva o método que faz INSERT para usar o recurso de auto-incremento do banco de dados. </br>

	"INSERT INTO {$this->tabela} (colunas, sem o id) VALUES (valores, sem o valor do id)"
