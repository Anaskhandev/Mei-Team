<?php
while ($row3 = mysqli_fetch_assoc($query)) {

    $output .= ' <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale px-2">
    <div class="project-single">
        <a href="agent-details.php?id=' . $row3['id'] . '" class="homes-img">
            <div class="project-inner project-head">
                <div class="homes">
                    <!-- <div class="homes-tag button alt featured">4 Listings</div> -->
                    <img src="' . './uploads/' . $row3['image'] . '" alt="home-1" class="img-responsive">
                    </div>
                </div>
            </a>
        <div class="homes-content">
            <div class="the-agents px-1">
                <h3><a href="agent-details.php?id=' . $row3['id'] . '">' . $row3['name'] . '</a></h3>
                <ul class="the-agents-details mt-0">
                    <li class="mb-0">' . $row3['designation'] . '</li>
                    <li class="mb-0"><a href="tel:' . $row3['mobile'] . '">' . $row3['mobile'] . '</a></li>
                    <li class="mb-0"><a href="mailto:' . $row3['email'] . '">' . $row3['email'] . '</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>';
}
$output .= '</div>';
