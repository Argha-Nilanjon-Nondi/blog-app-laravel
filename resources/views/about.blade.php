@extends("layouts.main")
@push("title")
About
@endpush
@section("content")
<x-navbar json='{
                  "home":{
                      "text":"Home",
                      "url":"/"
                    },
                    "blog":{
                        "text":"Blog",
                        "url":"/blog"
                    },
                    "about":{
                        "text":"About",
                        "url":"/about",
                       "active":"true"
                    },
                    "contact":{
                        "text":"Contact",
                        "url":"/contact"
                    }
                }' />

<x-banner headtext="About Us"></x-banner>
<div class="w-[97%] mx-auto my-2">
    <div class="flex justify-between about-box-a:flex-col">
        <div class="w-[225%] mr-2 mb-2 about-box-a:w-[90%] about-box-a:mx-auto about-box-a:my-auto">
            <img src="{{asset('/img/person.jpg')}}" class="h-72 w-full about-box-a:h-[40rem] about-box-b:h-[20rem] about-box-c:h-[25rem]" alt="">
        </div>
        <div>
            <p>Lorem, laudantium facere tempora possimus distinctio. Maiores, ratione impedit saepe magnam nostrum perspiciatis neque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel dolorum error mollitia ad, ex nam magni voluptatibus tempore quam ea est nemo modi optio labore magnam autem maxime nisi nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas natus porro fugit quam quisquam, ut dolorem reiciendis mollitia at sunt excepturi maxime, reprehenderit consequuntur sed? Mollitia alias enim esse error? Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vel qui praesentium sequi error. Sequi maiores libero est. Obcaecati numquam, tempora odio omnis corporis possimus earum velit officiis a natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non beatae natus eaque quasi repudiandae ratione veniam ea harum, sapiente vel consequuntur doloribus mollitia, odit veritatis? Eligendi perferendis repellat esse aperiam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem molestias provident quas nostrum distinctio iste repellat vitae quam. Officia quod tenetur, in reprehenderit veniam modi sint inventore ex eos similique. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fugit officia libero laudantium sequi eius inventore amet, magnam ullam eligendi non. Consequatur tempore sunt temporibus ad eius quod minima accusamus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, laboriosam repellat iste sit neque numquam molestiae quos. Consequuntur deleniti soluta, error </p>
        </div>
    </div>
    <div class="my-4">
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam soluta enim alias iure, natus asperiores excepturi, delectus numquam perspiciatis, saepe impedit porro minus. Itaque voluptatem debitis porro, dolorum molestias laborum.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe nam commodi eveniet doloremque provident labore dicta quidem ut neque dolore odio temporibus iste illo qui nulla, officiis similique et reiciendis.
            Accusantium perferendis vel expedita voluptates. Nisi sint non voluptas adipisci quasi itaque aperiam minus, exercitationem quibusdam deserunt ipsam id dicta! Quibusdam quo sequi laboriosam necessitatibus blanditiis deleniti maiores nulla ipsum.
            Sed facere error laudantium deleniti veritatis amet, delectus ad a laborum beatae animi repellat dolorem, doloremque labore ipsam, voluptas suscipit fugit aperiam corrupti blanditiis quis vel illum? Officia, in dolores.
            Itaque obcaecati deleniti sunt hic non, tenetur, nesciunt possimus impedit repellendus distinctio eum tempora amet dolor nobis ex saepe dolorem minima aspernatur quasi! Consequatur ullam quaerat soluta natus similique tempore.
            Ut ea libero cupiditate sint, pariatur consequatur, nulla voluptatem autem inventore assumenda iure maxime. Distinctio, animi error! Quod optio beatae accusamus, sint, eum vero ad assumenda aperiam animi adipisci fuga.
            Mollitia eaque perferendis earum facere. Perspiciatis voluptas dolores blanditiis maxime, distinctio sint ratione quibusdam! Perferendis voluptatum earum suscipit accusantium rerum repellendus ea, eaque molestiae, repudiandae in fugiat quasi dolorum autem?
            Soluta ea, odio nulla quas provident vitae ipsa quibusdam maxime a possimus optio atque dolore amet necessitatibus consectetur. Quod molestias voluptatem ipsam at eius nulla nobis eum repellat laudantium omnis!
            Voluptates vel numquam eos! Error velit dolorum necessitatibus quia possimus fugiat adipisci expedita architecto, fuga, autem cum? Cupiditate id ullam suscipit ea, officia perferendis doloremque nostrum. Veritatis praesentium placeat obcaecati!
        </p>
    </div>
</div>
<x-footer />
@endsection