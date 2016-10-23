<?php
 
add_action( 'wp', 'setup_schedule' );
 
/* Check if the Cron job is scheduled - if not, schedule it */
function setup_schedule() {
    if ( ! wp_next_scheduled_job( 'hourly_event' ) ) {
        wp_schedule_event( time(), 'hourly', 'hourly_event');
    }
}
 
add_action( 'hourly_event', 'schedule_hourly' );
 
/* Run a function to schedule the job hourly */
function hourly_cron_job() {
    
}