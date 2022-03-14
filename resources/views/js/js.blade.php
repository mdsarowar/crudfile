@extends('master')

@section('title')
    Java Script
@endsection

@section('body')
{{--    <h1 class="text-center" id="h1">Hello world</h1>--}}
<h1 id="h1"></h1>
<div id="content"></div>
    <script>
        function createDiv(hig,wid,col) {
            var div=document.createElement('div');
            div.style.height=hig;
            div.style.width=wid;
            div.style.backgroundColor=col;
            div.style.float='left';
            div.style.borderRadius='20px';
            div.setAttribute('id','colorDiv');

            var content=document.getElementById('content');
            content.append(div);

        }
        createDiv('400px','300px','red');
        createDiv('200px','100px','green');
        createDiv('150px','300px','gray');
        createDiv('300px','500px','black');


        // document.write('Hello world');

        // var name='sarowar';
        // // var 22street='22 street';
        // var Bangladesh='Hello Bangladesh';
        // var arif_name='his name is Arif';
        // var hello_jenifer ='Hello jenifer';
        //  document.write(name);

        // var firstName='sanjida';
        // var lastName='Akhtar';
        // document.write(firstName + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      ' + lastName);

        // var data= ['shila','sadia',100,20,20.25, 'bitm',true,'bangladesh',200,30.5 ];
        // // document.write(data[6]);
        //
        //
        // for(index in data){
        //     // document.write(data[index]+'<br>');
        //     if (index > 1){
        //         document.write(data[index]+'<br>');
        //     }
        //
        // }


        // function name() {
        //     // document.write('Tarek');
        //     alert('hello world');
        //
        // }
        // name();

        // var firstName='sawon';
        // var lastName='Akhter';
        //
        // function printName() {
        //     document.write(firstName+' ' +lastName)
        //
        // }
        // printName();

        // getResult(10,2);
         function getResult(firstNumber,lastNumber) {
             document.write(firstNumber - lastNumber +'<br>');

         }

         // getResult(100,50);


         function getFullname(firstName,lastName) {
             var fullname=firstName+ ' '+lastName;
            // var h1= document.getElementById('h1');
            // h1.innerHTML =fullname;

             document.getElementsByTagName('h1')[0].innerHTML=fullname;

         }

         getFullname('habibur','Rahman');


    </script>

@endsection
