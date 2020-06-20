function resultShowing(data,page,flag) {
    let table = document.getElementById("resultTable");
    let tdList = table.getElementsByTagName("td");
    let foot= document.getElementById("footShow");
    for (let i = 0; i < 16; i++) {
        tdList[i].innerHTML = "";
    }
    let img = 0;
    for (let j = 0; j < data[1].length; j++) {
        if (data[1][j] != null) {
            img++;
        }
    }
    let pageCount = Math.ceil(img / 16);
    if (flag){
        foot.innerHTML="";
  if (pageCount<5){
  for (let i=0;i<pageCount;i++){
    let m= document.createElement("a");
    m.style.display="inline";
    m.innerHTML=i+1+"";
    foot.append(m);
  }
  }
  if (pageCount>5) {
      for (let j = 0; j < 5; j++) {
          let p = document.createElement("a");
          p.innerHTML =j+1+"" ;
          p.style.display="inline";
          foot.append(p);
      }
  }
  flag=false;
        for (let i=0;i<foot.children.length;i++){
            foot.children[i].onclick=function () {
                resultShowing(data,i+1,false);
            }
        }
    }
    for(let i=0;i<foot.children.length;i++){
        foot.children[i].style.color='black';
    }
    foot.children[page-1].style.color='blue';
    function imgShowing(i) {
        for (let j=0;j<16;j++){
               let a =document.createElement("a");
               let m =16*(i-1)+j;
               a.href = "../html/Details.php?path="+data[2][m];
               let div1 = document.createElement("div");
               if (m<data[2].length){
               div1.style.background= 'url(../../img/travel-images/normal/medium/'+data[2][m]+')';
               div1.style.width="150px";
               div1.style.height="150px";
               div1.style.backgroundSize="cover";
               }
               else {
                   div1.style.backgroundImg = 'url(../../img/white.jpg)';
                   div1.style.width="150px";
                   div1.style.height="150px";
                   div1.style.backgroundSize="cover";
               }
               a.append(div1);
               tdList[j].append(a);
        }
    }
    imgShowing(page);
}
