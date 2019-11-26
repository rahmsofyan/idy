{% extends 'layout.volt' %}

{% block title %}Tambah Idea{% endblock %}

{% block styles %}
<style>
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
{% endblock %}

{% block content %}

<h2>Tambahkan Ide</h2>
<div>
<form action="/send" method="post">
  Judul:<br>
  <input type="text" name="tittle" value="">
  <br>
  Isi:<br>
  <textarea type="text" rows="10" cols="10" style="width:100%" name="content" value=""></textarea>
  <br><br>
  Email:<br>
  <input type="text" name="email" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 
<div>

{% endblock %}

{% block scripts %}

{% endblock %}