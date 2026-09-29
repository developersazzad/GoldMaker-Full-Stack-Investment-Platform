<?php
$FAQ = faq_section() ?? [];
$faqSmallText = $FAQ["FaqSmallText"] ?? "";
$mainText = $FAQ["MainText"] ?? "";
 ?>
<section id="faq" class="faq padding-top padding-bottom">
  <div class="container">
    <div class="section-header text-center">
      <p class="subtitle"><?php echo $faqSmallText ?></p>
      <h2><?php echo $mainText ?></h2>
    </div>
    <div class="faq__wrapper">
      <div class="row g-4">
        <div class="col-12">
          <div class="accordion" id="faqAccordion1">
            <div class="row g-4">
              <?php
               $ii=1;
               $faq_box = faq_section_boxes();
               foreach ($faq_box as $data) {
               ?>
               <div class="col-12">
                 <div class="accordion__item" data-aos="fade-up" data-aos-duration="1000">
                   <div class="accordion__header" id="faq1">
                     <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody_<?php echo $ii ?>" aria-expanded="false" aria-controls="faqBody1">
                      <?php echo $data["title_text"] ?> <span class="plus-icon"></span>
                     </button>
                   </div>
                   <div id="faqBody_<?php echo $ii ?>" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion1">
                     <div class="accordion__body">
                      <?php echo $data['desc_text'] ?>
                     </div>
                   </div>
                 </div>
               </div>
               <?php
               $ii++;
               }
               ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
