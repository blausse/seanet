function mem_del() {
    const rtn_val = confirm("정말 탈퇴하시겠습니까?");
    if (rtn_val) {
        location.href = "member_delete.php?>";
    };
};