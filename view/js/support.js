
//Reply to customer message
document.addEventListener('click', e => {
    if (e.target.type == 'button') {

        // reply to customer message
        if (e.target.innerHTML === 'Reply') {
            const rmessageForm = e.target.parentNode;
            let user_type = document.getElementById('user_type').innerHTML;
            let stuff_id = document.getElementById('user_id').innerHTML;

            let stuffReply = 'reply=' + rmessageForm.children[4].value + '&id=' + rmessageForm.id + '&stuff_id=' + stuff_id + '&rtype=REPLY';

            const URL = '/web-tech/control/reply-customer.php';

            if (user_type == 'support') {
                let request = new XMLHttpRequest();
                request.onreadystatechange = e => {
                    if (request.readyState == 4 && request.status == 200) {
                        document.getElementById('msg-reply-blk').innerHTML = request.responseText;
                    }
                };
                request.open('POST', '/web-tech/control/reply-customer.php', true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send(stuffReply);
            }
        }

        // Delete Message
        else if (e.target.innerHTML === 'Delete') {
            let user_type = document.getElementById('user_type').innerHTML;

            const dmessageForm = e.target.parentNode.parentNode;
            let id = dmessageForm.id;

            const data = 'username=' + document.getElementById('user_id').innerHTML + '&id=' + id + '&rtype=DELETE';
            const URL = '/web-tech/control/reply-customer.php';

            if (user_type == 'customer') {
                let request = new XMLHttpRequest();
                request.onreadystatechange = e => {
                    if (request.readyState == 4 && request.status == 200) {
                        document.getElementById('msg-reply-blk').innerHTML = request.responseText;
                    }
                };
                request.open('POST', '/web-tech/control/reply-customer.php', true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send(data);
            }
        }

        // Create message
        /*
        else if (e.target.innerHTML === 'Post') {
            let user_type = document.getElementById('user_type').innerHTML;
            let user_name = document.getElementById('user_id').innerHTML;

            const createPostForm = e.target.parentNode;
            let input = createPostForm.children[1].value;

            const data = 'username=' + user_name + 'input=' + input;
            const URL = '/web-tech/control/support.php'

            if (user_type != 'support') {
                let request = new XMLHttpRequest();
                request.onreadystatechange = e => {
                    if (request.readyState == 4 && request.status == 200) {
                        document.getElementById('msg-reply-blk').innerHTML = request.responseText;
                    }
                };
                request.open('POST', URL, true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send(data);
            }

        }*/
    }
});


// Load All messages and reply
window.addEventListener('load', e => {
    if (document.getElementById('user_type').innerHTML == 'support') {
        let params = 'rtype=ALL';
        const URL = '/web-tech/control/reply-customer.php';

        let request = new XMLHttpRequest();
        request.onreadystatechange = e => {
            if (request.readyState == 4 && request.status == 200) {
                document.getElementById('msg-reply-blk').innerHTML = request.responseText;
            }
        };
        request.open('GET', '/web-tech/control/reply-customer.php?' + params, true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send(params);
    }
    else {
        let params = 'rtype=OTHER' + '&username=' + document.getElementById('user_id').innerHTML;
        const URL = '/web-tech/control/reply-customer.php';

        let request = new XMLHttpRequest();
        request.onreadystatechange = e => {
            if (request.readyState == 4 && request.status == 200) {
                document.getElementById('msg-reply-blk').innerHTML = request.responseText;
            }
        };
        request.open('GET', '/web-tech/control/reply-customer.php?' + params, true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send(params);
    }
});
