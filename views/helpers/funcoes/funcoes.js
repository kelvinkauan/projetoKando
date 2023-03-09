function getSelectItemThat(id) {
  for (var i = 1;i <= 4; i++)
  {
      document.getElementById(i).checked = false;
  }
  document.getElementById(id).checked = true;
}