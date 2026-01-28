
<script type="module">
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyDSf51jWs3I4AXX0U8M_HxKn4VtRYg72xs",
  authDomain: "hotel-order-7f1f2.firebaseapp.com",
  projectId: "hotel-order-7f1f2",
  appId: "1:527097451112:web:0d55b38d331bbe399761dd",
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);

// Services you will use
export const auth = getAuth(app);
export const db = getFirestore(app);
</script>
