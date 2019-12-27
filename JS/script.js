function selectTab(tabIndex) {
  //Hide All Tabs
  document.getElementById('Home').style.display="none";
  document.getElementById('About').style.display="none";
  document.getElementById('History').style.display="none";
  document.getElementById('Hobbies').style.display="none";
  document.getElementById('Awards').style.display="none";
  document.getElementById('Resume').style.display="none";
  
  
  //Show the Selected Tab
  document.getElementById(tabIndex).style.display="block";  
}