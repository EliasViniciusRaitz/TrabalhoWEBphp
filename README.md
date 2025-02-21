# Sistema de Gestão Escolar

Este projeto é um sistema de gestão escolar desenvolvido com o framework **Laravel**. Ele permite a criação, leitura, edição e exclusão (CRUD) de registros de cursos, estudantes, professores e turmas. O sistema também inclui funcionalidades de autenticação de usuários.

## Objetivo

O objetivo deste projeto é fornecer uma plataforma simples para gerenciar informações relacionadas ao ambiente escolar, como cursos, estudantes, professores e turmas.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP utilizado para o desenvolvimento da aplicação back-end.
- **Blade**: Motor de templates do Laravel para criação das views.
- **MySQL**: Banco de dados relacional utilizado para armazenar os dados da aplicação.
- **Bootstrap**: Framework CSS para construção de uma interface responsiva.
- **PHP**: Linguagem de programação utilizada para desenvolver a aplicação.
- **HTML5/CSS3**: Linguagens para construção da interface e estilo das páginas.
- **JavaScript**: Para interatividade e funcionalidades adicionais na interface.
- **Composer**: Gerenciador de dependências para PHP.

## Funcionalidades

### CRUD para Cursos, Estudantes, Professores e Turmas
- **Cursos**: Permite adicionar, editar, listar e excluir cursos.
- **Estudantes**: Permite adicionar, editar, listar e excluir estudantes.
- **Professores**: Permite adicionar, editar, listar e excluir professores.
- **Turmas**: Permite adicionar, editar, listar e excluir turmas. Cada turma está associada a um curso e a um professor.

### Autenticação de Usuários
- O middleware de autenticação protege as rotas do perfil do usuário.

### Validação de Dados
- Validações são realizadas no back-end para garantir que os dados inseridos sejam corretos e consistentes. Isso inclui validação de campos como nome, email e datas.

### Requisitos

Antes de rodar o projeto, você precisa ter os seguintes softwares instalados:

- **PHP** (versão 8.4.4)
- **Composer** (gerenciador de dependências PHP)
- **MySQL**
- **Laravel** (pode ser instalado via Composer)
