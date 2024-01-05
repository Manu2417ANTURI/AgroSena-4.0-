<x-app-layout>

    <style>
        /* Default height for small devices */
        #intro-example {
       
          background-image:linear-gradient(rgba(0, 0, 0, 0.75),rgba(56, 53, 53, 0.75)), url('https://images.unsplash.com/photo-1490818387583-1baba5e638af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Zm9vZCUyMHdoaXRlJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&w=1000&q=80');
          background-repeat: no-repeat;
      position: relative;
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
  
    
        }
    
    
        
      </style>
  
    <div
      id="intro-example">
    


<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
  
    <div>          
       <img class= "" src="agrosena.png" width="120px">

    </div>
    
    <div class="w-full sm:max-w-md mt-4 px-6 py-6  shadow-md overflow-hidden sm:rounded-lg  bg-white">
        {{ $slot }}
    </div>
</div>
</div>

</x-app-layout>
<x-footer/>

