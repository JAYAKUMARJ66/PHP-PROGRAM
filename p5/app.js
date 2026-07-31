const fs= require('fs');
const filename= "mca.txt";
const data="hello world";

fs.writeFile(filename,data,function(err)
{
    if(err)
    {
        console.log(err);

    }
    else{
        console.log("File written successfully");
    }

    fs.readFile(filename,(err,content)=>{
        if(err)
        {
            console.log(err);
        }
        else{
            console.log(data);
        }
        console.log(content);
});
});