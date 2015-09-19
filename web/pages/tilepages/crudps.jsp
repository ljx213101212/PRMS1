<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>
<html>
<head>
<link href="<c:url value='/css/main.css'/>" rel="stylesheet" type="text/css"/>
<fmt:setBundle basename="ApplicationResources" />
<title> <fmt:message key="title.crudps"/> </title>
</head>
<body>
        <h1><fmt:message key="label.crudps"/></h1>
        <c:url var="url" scope="page" value="/nocturne/addeditps">
        		<c:param name="name" value=""/>
                <c:param name="description" value=""/>
                <c:param name="duration" value=""/>
                <c:param name="insert" value="true"/>
        </c:url>
        <a href="${url}"><fmt:message key="label.crudps.add"/></a>
        <br/><br/>
        <table class="borderAll">
            <tr>
                <th><fmt:message key="label.crudps.duration"/></th>
                <th><fmt:message key="label.crudps.dateOfProgram"/></th>
                <th><fmt:message key="label.crudps.startTime"/></th>
                <th><fmt:message key="label.crudps.programName"/> </th>
                <th><fmt:message key="label.crudps.presenterName"/></th>
                <th><fmt:message key="label.crudps.producerName"/></th>
                <th><fmt:message key="label.crudps.edit"/>   <fmt:message key="label.crudps.delete"/></th>
            </tr>
            <c:forEach var="crudps" items="${rps}" varStatus="status">
                <tr class="${status.index%2==0?'even':'odd'}">
                    <td class="nowrap">${crudps.duration}</td>
                    <td class="nowrap">${crudps.dateOfProgram}</td>
                    <td class="nowrap">${crudps.startTime}</td>
                    <td class="nowrap">${crudps.radioProgram.name}</td>
                    <td class="nowrap">${crudps.presenter.name}</td>
                    <td class="nowrap">${crudps.producer.name}</td>
                    <td class="nowrap">
                        <c:url var="updurl" scope="page" value="/nocturne/addeditps">
                            <c:param name="duration" value="${crudps.duration}"/>
                            <c:param name="dateOfProgram" value="${crudps.dateOfProgram}"/>
                            <c:param name="startTime" value="${crudps.startTime}"/>
                            <c:param name="radioProgramName" value="${crudps.radioProgram.name}"/>
                            <c:param name="presenterName" value="${crudps.presenter.name}"/>
                            <c:param name="producerName" value="${crudps.producer.name}"/>
                             <c:param name="insert" value="false"/>
                        </c:url>
                        <a href="${updurl}"><fmt:message key="label.crudps.edit"/></a>
                        &nbsp;&nbsp;&nbsp;
                        <c:url var="delurl" scope="page" value="/nocturne/deleteps">
                            <c:param name="name" value="${crudps.id}"/>
                        </c:url>
                        <a href="${delurl}"><fmt:message key="label.crudps.delete"/></a>
                    </td>
                </tr>
            </c:forEach>
        </table>
</body>
</html>