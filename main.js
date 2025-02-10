

setInterval(
    () => {
        fetch('https://garden-ten-smoky.vercel.app/items.json')
            .then(data => data.json())  // Преобразуем ответ в JSON
            .then(res => {
                console.log(res)
            })
            .catch(err => console.error('Ошибка:', err));
    },
    3000
  );

// let func = () => {
    
// Html5Qrcode.getCameras().then(devices => {
//     if (devices && devices.length) {
//         let cameraId = devices[1].id;
//         const scanner = new Html5Qrcode("reader");
//         scanner.start(cameraId, {
//             fps: 30,   
//             qrbox: { width: 250, height: 250 }  
//     },
//     (decodedText, decodedResult) => {
//         // document.getElementById('read').innerHTML += `${decodedText}`
//         fetch('items.json')
//             .then(data => data.json())  // Преобразуем ответ в JSON
//             .then(res => {
//                 console.log(res)
//                 res.forEach(item => {
//                     //document.getElementById('read').innerHTML += `${res["article"]},${item["article"]}`
//                     if(decodedText.trim() == item["article"]) {
//                         const name = item["name"]
//                         const price = item["price"]
//                         document.getElementById('read').innerHTML += `Лампы: ${name} Цена: ${price}`
//                     }
//                 }); 
                
//             })
//             .catch(err => console.error('Ошибка:', err));  // В случае ошибки выводим её
        
//     },
//     (errorMessage) => {
//         // parse error, ignore it.
//     })
//     .catch((err) => {
//     // Start failed, handle it.
//     });
// }
// }).catch(err => {
// // handle err
// });


// }