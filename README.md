# BEO - Banco de Empregos e Oportunidades

Este é um projeto com fins acadêmicos para a disciplina de Engenharia de Software.

O produto em questão, BEO 1.0 (Banco de Empregos e Oportunidades), foi desenvolvido empresa (fictícia) Ctrl Sistemas, para atender a necessidade de ligar empregadores e candidatos (acadêmicos e egressos da Facomp) do mercado local.

---

Até agora, temos apenas uma estrutura base de frontend da parte do candidato.

Foi feita uma estrutura básica para acessar as páginas, apenas com um parâmetro GET `pag`, que deverá conter o caminho do arquivo PHP (sem sua extensão), uma vez que o objetivo era ser simples e não será usado nada em produção.

### Estrutura de diretórios

As páginas estão todas no diretório `includes/`, divididas em:

* `empresa/`
  Onde os arquivos da área da empresa deverão ficar.

* `pessoa/`
  Onde os arquivos da área do candidato deverão ficar.

##### Exemplos de links de acesso:

* `?pag=pessoa/meu-curriculo`
* `?pag=pessoa/buscar-vagas`
* `?pag=pessoa/cadastro`


## TODO

* [x] Finalizar telas da área do candidato
* [ ] Integração com a base de dados
* [x] Interfaces da área da empresa
