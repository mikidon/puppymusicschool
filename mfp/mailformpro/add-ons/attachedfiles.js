mfpLang['ErrorFileField1'] = '$nameに選択されたファイルは対応していません。対応ファイルは $1 です。';
mfpLang['ErrorFileField2'] = '$nameで選択できるファイルは$1 ファイルまでです。';
mfpLang['ErrorFileField3'] = '$nameで選択できるファイルサイズは $1 までです。';
mfpLang['WarningCode'][7] = '送信に対応していないファイルが選択されているか、ファイルサイズの制限を超過しています。';

function mfp_attached_file_check(obj){
	// multiple
	var files = new Array();
	try {
		for(var i=0;i<obj.files.length;i++)
			files.push(obj.files[i].name);
	}
	catch(e){
		files.push(obj.value);
	}
	//
	if(obj.getAttribute('data-max') && obj.getAttribute('data-max') < files.length)
		mfp.ExtendErrorMsg = mfpLang['ErrorFileField2'].replace('$1',obj.getAttribute('data-max'));
	
	if(obj.getAttribute('data-size-max') && obj.files){
		var filesize = 0;
		var filesizemax = parseInt(obj.getAttribute('data-size-max'));
		for(var i=0;i<obj.files.length;i++){
			filesize += obj.files[i].size;
		}
		if(filesizemax < filesize){
			mfp.ExtendErrorMsg = mfpLang['ErrorFileField3'].replace('$1',mfpFileSizeDigit(obj.getAttribute('data-size-max')));
		}
	}
	
	for(var ii=0;ii < files.length;ii++){
		var types = files[ii].split('.');
		var type = types[types.length-1].toLowerCase();
		var errorflag = true;
		var acceptType = new Array();
		var acceptTypes = obj.getAttribute('accept').split(',');
		for(var i=0;i<acceptTypes.length;i++){
			var aType = acceptTypes[i].replace('.','').toLowerCase();
			acceptType.push(aType);
			if(type == aType.toLowerCase())
				errorflag = false;
		}
		if(errorflag)
			mfp.ExtendErrorMsg = mfpLang['ErrorFileField1'].replace('$1',acceptType.join(' / '));
	}
}
function mfpGetFileSize(obj){
	try {
		if(obj.files){
			var filesize = 0;
			for(var i=0;i<obj.files.length;i++)
				filesize += obj.files[i].size;
			return filesize;
		}
	}
	catch(e){
		return 0;
	}
}
function mfpFileSizeDigit(size){
	var str = 'Byte';
	if(size > (1024*1024*1024*1024)){
		size = (parseInt(size / (1024*1024*1024*1024))*100)/100;
		str = 'TB'
	}
	else if(size > (1024*1024*1024)){
		size = (parseInt(size / (1024*1024*1024))*100)/100;
		str = 'GB'
	}
	else if(size > (1024*1024)){
		size = (parseInt(size / (1024*1024))*100)/100;
		str = 'MB'
	}
	else if(size > (1024)){
		size = (parseInt(size / (1024))*100)/100;
		str = 'KB'
	}
	return size+str;
}

mfp.extend.event('startup',
	function(){
		mfp.Mfp.encoding = "multipart/form-data";
	}
);
mfp.extend.event('check',
	function(obj){
		if(mfp.Elements[obj.name].type == "file" && obj.value != "")
			mfp_attached_file_check(obj);
	}
);
mfp.extend.event('change',
	function(obj){
		if(mfp.Elements[obj.name].type == "file" && obj.value != "")
			mfp.check(obj);
	}
);
