<?php
    $users = array(
        'Ben'=>'Ben0204@gmail.com',
        'Anita' => 'Anita@gmail.com',
        'Genie' => 'Geine@gmail.com'
    );

    $input = $_POST['name-input'];
    
    
    
    //方法一
    // $result = 0;
    // foreach($users as $user => $email)
    // {
    //         if($input == $user){
    //             echo $email;
    //             $result = 1;            
    //         }

    // }

    // if($result == 0){
    //     echo "查無此人！";
    // }

//方法二:使用php的內建函數

    if(array_key_exists($input,$users)){     
        echo $users[$input];      
    }else{
        echo "查無此人!!!";
    }
?>