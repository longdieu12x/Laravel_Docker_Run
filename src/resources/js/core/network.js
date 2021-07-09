const baseUrl = 'http://localhost:81/'
const axios = require('axios');

export default {
    get(url, params){
        return new Promise((resolve,reject) => {
            axios.get(baseUrl+url,{params})
            .then(function(res){
                resolve(res.data);
            })
            .catch(function (err){
                reject(err);
            })
            .then(function(){
            });
        });
    },
    post(){

    },
    push(){

    },
    delete(){

    },
}
