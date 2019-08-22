function menseki(a,b,c=3.14){
return"面積は"+a*b*c;}

document.write(menseki(5,5,3.14));
document.write("<br>");
document.write(menseki(7,7,3.14));
document.write("<br>");
document.write(menseki(10,10,3.14));
document.write("<br>");

document.write("<br>");
document.write("<br>");

function ryoukin(otona,kodomo){
 return(otona*500)+(kodomo*200);
}
document.write("A."+ryoukin(2,4)+"円です。"+"<br>");
document.write("B."+ryoukin(1,5)+"円です。"+"<br>");
document.write("C."+ryoukin(3,7)+"円です。"+"<br>");