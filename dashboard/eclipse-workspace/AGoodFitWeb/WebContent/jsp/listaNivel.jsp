<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
  </head>
  <body>
  <jsp:include page="header.jsp"/>
    <div class="container">
      <h2 class="mt-5">Niveis Cadastrados</h2>
     <p>${ message }</p>
      <hr>
      <table class="table table-striped table-dark mt-4">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Titulo</th>
            <th scope="col">Excluir</th>
          </tr>
        </thead>
        <tbody>
        <c:forEach items="${niveis}" var="nivel">
          <tr>
            <td>${nivel.codNivelUsuario}</td>
            <td>${nivel.nomeNivelUsuario}</td>
            <!-- <td><a href="/nivelusuario/deletar/{{ $nivel->codNivelUsuario }}" class="badge badge-danger"><i class="far fa-trash-alt" style="font-size:25px;"></i></a></td> -->
          </tr>
        </c:forEach>  
        </tbody>
      </table>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
