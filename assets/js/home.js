window.addEventListener("load",(e)=>{
    const qna = document.querySelectorAll(".qna")
    let prevElement = null
    Array.from(qna).forEach((element)=>{
        element.addEventListener("click",()=>{
            // console.log(element.getAttribute("data-target"));
            
            if(!prevElement){
                
                prevElement = element.children[1]
                prevElement.classList.toggle("active")
            }
            else if(prevElement == element.children[1])
            {
                prevElement.classList.toggle("active")
                prevElement = null
            }
            else{
                prevElement.classList.toggle("active")
                prevElement = element.children[1]
                prevElement.classList.toggle("active")
            }

        })
    })
  })