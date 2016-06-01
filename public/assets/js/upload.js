// Javascript drag and drop uploader by Agne Ødegaard
var elm = function(selector){
    return document.querySelector(selector);
}

HTMLElement.prototype.onDrop = function(func){
    this.addEventListener("drop", function(e){
        e.stopPropagation();
        e.preventDefault();
        
        if(typeof func === 'function'){
            var callback = func.bind(this);
            callback(e.dataTransfer.files);
        }
    }, false);
    
    return this;
}
HTMLElement.prototype.onDragOver = function(func){
    this.addEventListener("dragover", function(e){
        e.stopPropagation();
        e.preventDefault();
        
        if(typeof func === 'function'){
            var callback = func.bind(this);
            callback(e);
        }
    }, false);
    
    return this;
}
HTMLElement.prototype.onDragLeave = function(func){
    this.addEventListener("dragleave", function(e){
        e.stopPropagation();
        e.preventDefault();
        
        if(typeof func === 'function'){
            var callback = func.bind(this);
            callback(e);
        }
    }, false);
    
    return this;
}
// other events: error, abort
function ajax(url, data, load, progress){
    if(url === undefined){
        return null;
    }
    var formData = new FormData();
    
    for(key in data){
        if(data.hasOwnProperty(key)){
            formData.append(key, data[key]);
        }
    }
    var XHR = new XMLHttpRequest();

    XHR.open('POST', url, true);
    if(load !== undefined && typeof load === 'function'){
        XHR.addEventListener("load", function(e){
            load(e.target.response);
        });
    }
    if(progress !== undefined && typeof progress === 'function'){
        XHR.upload.addEventListener("progress", function(e){
            if (e.lengthComputable) {
                progress(e);
            }
        });
    }
    
    XHR.send(formData === undefined ? null : formData);  
}

elm("#drop-container").onDrop(function(files){
    var that = this;
    
    ajax('/assets/ajax/uploader.php', {file : files[0]}, function(data){
        console.log(data);
        data = JSON.parse(data);
        if(data.name){
            elm('#image').value = data.name;
            that.style.backgroundImage = "url(/assets/img/"+data.name+")";
        } else {
            elm("[data-percent]").setAttribute('class', 'front error');
            console.log(data);
        }
       
        that.className = "drop dropped";
        
    }, function(e){
        var p = Math.floor( (e.loaded / e.total) * 100 );
        
        elm('[data-percent]').setAttribute("data-percent", p);
        elm('tspan').textContent = p+"%";
    });
    
}).onDragOver(function(){
    this.className = "drop active";
    
}).onDragLeave(function(){
    this.className = "drop";
    
});