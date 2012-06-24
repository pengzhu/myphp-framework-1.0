// JavaScript Document
function Point(x,y) 
{ this.x = x; this.y = y; }
mouseLocation = new Point(-500,-500);
function getMouseLoc(e)
{
	if(!document.all) //NS
	{
		mouseLocation.x = e.pageX;
		mouseLocation.y = e.pageY;
	}
	else //IE
	{
		mouseLocation.x = event.x + document.all.scrollLeft;
		mouseLocation.y = event.y + document.all.scrollTop;
	}
	return true;
}
//NS init:
if(document.layers)
{ document.captureEvents(Event.MOUSEMOVE); document.onMouseMove = getMouseLoc; }
function getmousepoint(i)
{
	if (document.layers) getMouseLoc; //NS
	else if (document.all) 
	getMouseLoc(); //IE
	if(document.getElementById("divb"+i).style.display="none")
	{document.getElementById("divb"+i).style.display="";}
	document.getElementById("divb"+i).style.left=mouseLocation.x;
	document.getElementById("divb"+i).style.top=mouseLocation.y;
}
function getmouse(i)
{
	document.getElementById("divb"+i).style.display="none";
}
function killErrors() {
return true;
}
window.onerror = killErrors;