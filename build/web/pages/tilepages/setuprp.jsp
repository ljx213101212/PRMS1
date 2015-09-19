<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
         pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>

<!DOCTYPE html>
<html>
    <head>
        <fmt:setBundle basename="ApplicationResources" />

        <title><fmt:message key="title.setuprp" /></title>
        <link href="<c:url value='/css/bootstrap.css'/>" rel="stylesheet"
              type="text/css" />
        <script src="<c:url value='/jquery/jquery.min.js'/>"></script>
        <script src="<c:url value='/js/bootstrap.js'/>"></script>
        <script src="<c:url value='/js/jquery.maskedinput.js'/>"></script>

        <script>
            jQuery(function ($) {
                $("#product").mask(")9:&9:&9", {placeholder: " "});
            });

            window.onload = function () {
                var input = document.getElementById("product");
                input.onkeydown = function () {
                    var temp2 = input.value.substr(0, 2);
                    console.log(input.value.substr(0, 2));
                    if (parseInt(temp2, 10) > 23) {
                        //console.log("1231312312");
                        input.value = "";
                        alert("hour can not be greater than 23");
                    }
                }
            }

        </script>
    </head>

    <body>
        <form action="${pageContext.request.contextPath}/nocturne/enterrp" method=post>
            <center>
                <table cellpadding=4 cellspacing=2 border=0>
                    <tr>
                        <th width="30%"><fmt:message key="label.crudrp.name" /></th>
                        <th width="45%"><fmt:message key="label.crudrp.description" /></th>
                        <th width="25%"><fmt:message key="label.crudrp.duration" /></th>
                    </tr>
                    <tr>
                        <td><fmt:message key="label.crudrp.name" /></td>
                        <td><c:if test="${param['insert'] == 'true'}">
                                <input type="text" name="name" value="${param['name']}" size=15
                                       maxlength=20>
                                <input type="hidden" name="ins" value="true" />
                            </c:if> 
                            <c:if test="${param['insert']=='false'}">
                                <input type="text" name="name" value="${param['name']}" size=15
                                       maxlength=20 readonly="readonly">
                                <input type="hidden" name="ins" value="false" />
                            </c:if></td>
                    </tr>
                    <tr>
                        <td><fmt:message key="label.crudrp.description" /></td>
                        <td><input type="text" name="description"
                                   value="${param['description']}" size=45 maxlength=20></td>
                    </tr>
                    <tr>
                        <td><fmt:message key="label.crudrp.duration" /></td>
                        <td><input type="text" id="product" name="typicalDuration"
                                   value="${statusDate}"/></td>
                    </tr>
                </table>
            </center>
            <input type="submit" value="Submit"> <input type="reset"
                                                        value="Reset">
        </form>

    </body>
</html>