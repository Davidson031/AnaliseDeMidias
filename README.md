<img src="https://i.imgur.com/9yJ2Q3k.jpeg">

<iframe width="420" height="315"
src="https://youtu.be/zyhO6oQKSUA">
</iframe>


Pequeno site de Análise de filmes, séries e animes.

100% próprio, feito do zero desde a modelagem UML até a codificação.

O user logado poderá inserir uma análise por uma rota bloqueada por autenticação.

A análise será visivel por todos e terá um form de comentários pedindo e-mail, nome e mensagem. Sem autenticação aqui, só sendo necessario preencher os campos (que serão verificados pelo front).

O usuario poderá filtrar as analises pelo tipo de midia (filme, serie ou anime), essa filtragem é feita por uma tabela separada (TipoMidia), linkada a tabela de analise por uma FK em uma relação 1:N.

Os comentarios ficam em uma tabela propria e também linkados às analises por uma FK (id da analise)
