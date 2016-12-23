
<input type="text" name="" value="" id="msg" onkeydown="handleKey(event)" />
<input type="hidden" name="" value="" id="colorvalue" />
<select id="color" onchange="changecolor()">
  <option value="#ff0000">Red</option>
  <option value="#0000ff">Blue</option>
  <option value="#000000">Black</option>
  <option value="#ffff00">Yellow</option>
  <option value="#00FF00">Green</option>
  <option value="#a52a2a">Brown</option>
</select>
<p id="example" style="color:#000000">This is example</p>

<script>
function changecolor(){
  var color = document.getElementById('color').value;
  console.log(color);
  document.getElementById('colorvalue').value = document.getElementById('color').value;
  document.getElementById('example').setAttribute("style","color:"+color)
}

function handleKey(e)
{
 // get the event
 e = (!e) ? window.event : e;
 console.log("Charcode: "+e.charCode+" \nkeycode: "+e.keyCode+" \nwhich: "+e.which+"\nType: "+e.type);

 // get the code of the character that has been pressed
 code = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));

 // handle the keydown event
 if (e.type == "keydown")
 {
 // if enter (code 13) is pressed
 if(code == 13)
 {
 // send the current message
 //sendMessage();
 }
 }
}
</script>
