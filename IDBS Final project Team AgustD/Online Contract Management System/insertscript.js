<script>
$("#myselect").on("change", function() {
    $("#" + $(this).val()).show().siblings().hide();
})
</script>