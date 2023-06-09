<?php $__env->startSection('title', 'Cart'); ?>
<?php $__env->startSection('content'); ?>
        <section style="background-image: url(../storage/settings/banner/<?php echo e($banner); ?>);background-position: center;background-repeat: no-repeat;background-size: cover;height:320px;" class="d-flex justify-content-center align-items-center">
            <div class="container"> 
                <h1 class="banner_inner_title">Cart</h1>
            </div>
        </section>
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <p class="fw-bold">Please Read the Terms Carefully</p>
                    <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-md-5 mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Terms & Conditions
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow rounded pb-3">
                  
                            <div class="table-responsive">
                                <table class="table cart-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>BEAT</th>
                                            <th>PRICE</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php if(session('success')): ?>
                                    <div class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                    </div>
                                    <?php endif; ?> 
                                    <tbody>
                                    <?php $total = 0 ?>
                                    <?php if(session('cart')): ?>
                                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                        <tr data-id="<?php echo e($id); ?>">
                                            <td>
                                                <img src="../storage/songs/<?php echo e($details['image']); ?>" alt="" class="cart-thumb">
                                                <span class="ms-3" style="font-size: 14px;"><?php echo e($details['name']); ?></span>
                                            </td>
                                            <td>$<?php echo e($details['price']); ?></td>
                                            <td>
                                                <a class="remove-from-cart pe-auto" href="javascript:void(0)" tabindex="-1" aria-disabled="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.579" height="29.199" viewBox="0 0 26.579 29.199">
                                                        <g id="Icon_feather-trash-2" data-name="Icon feather-trash-2" transform="translate(-3 -1.5)">
                                                        <path id="Path_4080" data-name="Path 4080" d="M4.5,9H28.08" transform="translate(0 -0.76)" fill="none" stroke="#ff1314" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                        <path id="Path_4081" data-name="Path 4081" d="M25.84,8.24V26.58a2.62,2.62,0,0,1-2.62,2.62H10.12A2.62,2.62,0,0,1,7.5,26.58V8.24m3.93,0V5.62A2.62,2.62,0,0,1,14.05,3h5.24a2.62,2.62,0,0,1,2.62,2.62V8.24" transform="translate(-0.38 0)" fill="none" stroke="#ff1314" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                        <path id="Path_4082" data-name="Path 4082" d="M15,16.5v7.86" transform="translate(-1.33 -1.71)" fill="none" stroke="#ff1314" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                        <path id="Path_4083" data-name="Path 4083" d="M21,16.5v7.86" transform="translate(-2.09 -1.71)" fill="none" stroke="#ff1314" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <td colspan="3" class="text-center fw-bold">No Beats Found</td>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="m-5">
                                <h3 class="fs-5 mb-0 ps-2" style="border-left: 2px solid #fd743d;">CART TOTALS</h3>
                                <div class="d-flex align-items-center justify-content-between ms-2 mt-3">
                                    <p class="mb-0" style="font-size: 18px;">CART SUBTOTAL</p>
                                    <p class="fw-bold fs-4 mb-0">$<?php echo e($total); ?></p>
                                </div>
                                <div class="d-md-flex justify-content-center text-center text-sm-start align-items-center">
                                    <div class="me-0 me-md-2 my-4 my-md-0"><a href="<?php echo e(url('/')); ?>" class="btn-2 text-dark  text-capitalize  p-sm-2" style="border-color: #707070;">Go back to home</a></div>
                                    <div class="me-0 ms-md-2"><a href="<?php echo e(route('checkout1')); ?>" class="btn-1 text-white">Proceed To Checkout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php $__env->stopSection(); ?>
  
<?php $__env->startSection('scripts'); ?>
<script src="https://unpkg.com/wavesurfer.js"></script>
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '<?php echo e(route('update.cart')); ?>',
            method: "patch",
            data: {
                _token: '<?php echo e(csrf_token()); ?>', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
        Swal.fire({
        title: 'Do you want to delete this beat?',
        showDenyButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: 'No',
        customClass: {
        actions: 'my-actions',
        confirmButton: 'order-2',
        denyButton: 'order-3',
    }
    }).then((result) => {
    if (result.isConfirmed) {
    $.ajax({
                url: '<?php echo e(route('remove.from.cart')); ?>',
                method: "DELETE",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
  }
})

    });
  

let wavesurfer;

function dosomething(element){
    
        const createSongPlayer = () => {
            localStorage.setItem('music_current_song', element.value)

            wavesurfer?.destroy()
    
            wavesurfer = WaveSurfer.create({
                container: '#waveform',
                waveColor: '#fd743d',
                progressColor: 'rgb(254, 179, 78)'
            });
        }
    
        const playSvg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM176 168V344C176 352.7 180.7 360.7 188.3 364.9C195.8 369.2 205.1 369 212.5 364.5L356.5 276.5C363.6 272.1 368 264.4 368 256C368 247.6 363.6 239.9 356.5 235.5L212.5 147.5C205.1 142.1 195.8 142.8 188.3 147.1C180.7 151.3 176 159.3 176 168V168z"/></svg>';
        const pauseSvg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM224 191.1v128C224 337.7 209.7 352 192 352S160 337.7 160 320V191.1C160 174.3 174.3 160 191.1 160S224 174.3 224 191.1zM352 191.1v128C352 337.7 337.7 352 320 352S288 337.7 288 320V191.1C288 174.3 302.3 160 319.1 160S352 174.3 352 191.1z"/></svg>';
    
    
         $('.play-pause-button').each(function(index, item) {
            $(item).html(playSvg)
        })

        const getSongFromLocalStorage = localStorage.getItem('music_current_song')

        if(getSongFromLocalStorage === element.value) {
            
            try {
                wavesurfer.playPause()
                return;
            } catch {
                localStorage.removeItem('music_current_song')
                createSongPlayer();
            }
           
           
        }
        
createSongPlayer();

const loadSong = wavesurfer.load('../storage/songs/'+element.value+'');

wavesurfer.on('pause', () => {
    $(element).html(playSvg)
})

wavesurfer.on('play', () => {
    $(element).html(pauseSvg)
})

wavesurfer.on('ready', () => {
    wavesurfer.playPause();
})

$('.controls .btn').on('click', function(){
      var action = $(this).data('action');
      switch (action) {
        case 'play':
          wavesurfer.playPause();
          break;
        case 'back':
          wavesurfer.skipBackward();
          break;
        case 'forward':
          wavesurfer.skipForward();
          break;
        case 'mute':
          wavesurfer.toggleMute();
          break;
      }
    });

    
};

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/backendhostingla/public_html/webapp/beatpro/resources/views/pages/cart.blade.php ENDPATH**/ ?>