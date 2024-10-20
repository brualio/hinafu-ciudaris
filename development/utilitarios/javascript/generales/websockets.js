
// document.addEventListener("DOMContentLoaded", () => {

//    let ShowText = text =>{
//         let textShow = `<div>${text}</div>`
//         wsChat.insertAdjacentHTML('beforeend', textShow)
//     } 

//     let ws = null
//     let wsConect = document.getElementById('wsConect')
//     let wsDisconect = document.getElementById('wsDisconect')
//     let wsChat = document.getElementById('wsChat')
//     let wsSendMessage = document.getElementById('wsSendMessage')
//     let wsMessage = document.getElementById('wsMessage')

//     wsConect.addEventListener('click',e =>{
//         ws = new WebSocket('ws://echo.websocket.org')
//         ws.onopen = () =>{ ShowText('Conecto')}
//         ws.onclose = () => { ShowText('Desconectado')}
//         ws.onerror = error =>{ ShowText(error)}
//         ws.onmessage = e =>{ ShowText(e.data)}
//     })

//     wsDisconect.addEventListener('click', e =>{
//         ws.close()
//     })

//     wsSendMessage.addEventListener('click', e =>{
//         ws.send(wsMessage.value)
//     })
// })