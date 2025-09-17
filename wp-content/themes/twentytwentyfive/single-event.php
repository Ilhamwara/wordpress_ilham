<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post();
  $date = get_post_meta(get_the_ID(), 'event_datetime', true);
  $location = get_post_meta(get_the_ID(), 'event_location', true);
  $price = get_post_meta(get_the_ID(), 'event_price', true);
  $banner = wp_get_attachment_url(get_post_meta(get_the_ID(), 'event_banner', true));
?>
<section class="">
<div class="relative h-64 w-full overflow-hidden">
  <div class="absolute inset-0 bg-[url('<?php echo esc_url($banner); ?>')] bg-cover bg-center blur-lg"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-black/30 backdrop-blur-md"></div>
  <div class="relative z-10 flex h-full justify-between p-20">
    <div class="flex flex-col gap-3">
      <div><h1 class="text-white text-xl font-bold"><?php the_title(); ?></h1></div>
      <div class="text-white flex gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-5 h-5" aria-hidden="true"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg> 
        <span id="event-date">
          <?php echo date('d M Y', strtotime($date)); ?>
        </span>
      </div>
      <div class="text-white flex gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
        <?php echo esc_html($location); ?>
      </div>
      <div class="text-white flex gap-3">
        Rp<?php echo number_format($price,0,',','.'); ?>
      </div>
    </div>
    <div class="hidden md:block">
      <img class="w-100" src="<?php echo esc_url($banner); ?>" alt="<?php the_title(); ?>">
    </div>
  </div>
</div>
<div class="relative px-20 py-5" style="border-bottom:1px solid #eee;">
  <div class="flex justify-between items-center">
    <div class="font-bold">Deskripsi</div>
    <div class="">
        <a href="" class="px-5 py-3 bg-[#005eff] font-bold text-white rounded-[10px]">Beli Tiket</a>
    </div>
  </div>
</div>
<div class="relative px-20 py-5">
     <div class="p-5 text-center rounded-[10px] bg-[#eee] mb-10 w-full md:w-1/2 mx-auto">
      <div id="countdown" class="text-xl font-semibold text-red-500">
        Loading countdown...
      </div>
     </div>
  <?php the_content(); ?>
</div>

</section>


<div class="event-detail hidden">
  
  <h1></h1>
  <div class="event-meta">
    
  </div>
  <div class="event-description"><?php the_content(); ?></div>
</div>
<?php endwhile; endif; ?>

<script>
// Ambil tanggal event dari elemen
const eventDate = new Date(document.getElementById('event-date').textContent).getTime();
const countdownEl = document.getElementById('countdown');

function updateCountdown() {
  const now = new Date().getTime();
  const distance = eventDate - now;

  if (distance <= 0) {
    countdownEl.textContent = "Event sudah dimulai!";
    clearInterval(timer);
    return;
  }

  // Hitung hari, jam, menit, detik
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  countdownEl.textContent = 
    `${days} Hari ${hours} Jam ${minutes} Menit ${seconds} Detik`;
}

// Update setiap detik
const timer = setInterval(updateCountdown, 1000);
updateCountdown(); // Panggil sekali agar tampil langsung
</script>

<?php get_footer(); ?>
