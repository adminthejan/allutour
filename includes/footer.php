
<footer class="w-full text-white ">
    <div class="w-full  mx-auto px-6 py-10 lora- bg-cover" style="background-image:url('assetes/images/bg9.png'); background-blend-mode: overlay; background-color: rgba(0, 0, 0, 0.5);">
        <div class="w-full flex md:flex-row flex-col px-8 md:space-y-0 space-y-4">
            <!-- Left Section -->
            <div class="w-full md:w-1/3 flex flex-col md:space-y-0 space-y-4">
                <h2 class="text-3xl font-cursive mb-4">Alluring Tours</h2>
                <p class="text-gray-300 text-justify">
                Alluring Tours is your trusted travel partner in Sri Lanka, offering unforgettable experiences across breathtaking landscapes, cultural wonders, and pristine beaches. Let us craft your perfect journey with tailor-made tour packages and expert local guides. Discover Sri Lanka like never before!
                </p>
                
                <div class="flex items-center rounded-full space-x-4">
    <a href="#" target="_blank" rel="noopener noreferrer">
        <p class="text-2xl"><i class="ri-facebook-circle-fill"></i></p>
    </a>
    <a href="https://www.instagram.com/srilanka_with_mahesh_87?igsh=MWxyc3V2NnJ5bGZ4Zg==" target="_blank" rel="noopener noreferrer">
        <p class="text-2xl"><i class="ri-instagram-fill"></i></p>
    </a>
    <a href="https://www.tripadvisor.com/Attraction_Review-g1500185-d13329321-Reviews-Alluring_Tours-Katunayake_Negombo_Western_Province.html" class="inline-block">
  
    <div class="w-6 h-6 bg-white flex justify-center items-center rounded-full">
    <img src="./assetes/images/tripadvisor.png" alt="Alluring Tours" class="w-4 h-4">
    </div>
    
</a>
            </div>
</div>
            <!-- Center Section -->
            <div class="w-full md:w-1/3 flex flex-col md:items-center">
                <div class="flex flex-col items-start">
                <h3 class="text-lg font-semibold ">About</h3>
                <div class="flex flex-col mt-4 space-y-2 ">
                    <a href="./index.php#packages" class="text-gray-300 hover:text-[#B9C37B]">Our Packages</a>
                    <a href="./destinations.php" class="text-gray-300 hover:text-[#B9C37B]">Destinations</a>
                    <a href="./index.php#experiences" class="text-gray-300 hover:text-[#B9C37B]">Key Experiences</a>
                </div>
            </div>
            </div>
            

            <!-- Right Section -->
            <div class="w-full md:w-1/3 flex flex-col items-start">
                <h3 class="text-lg font-semibold">Contact Us</h3>
                <p class="text-gray-300 mt-2">170/6,Kondagammulla,Demanhandiya</p>
                <div class="text-gray-300 mt-2 flex flex-col space-y-2">
                    <a href="tel:+94776509918" class="hover:text-[#B9C37B] transition">📞 +94 776509918</a>
                    <a href="tel:+94773212076" class="hover:text-[#B9C37B] transition">📞 +94 773212076</a>
                </div>
                <a href="mailto:info@srilankaalluringtours.com" class="text-gray-300 mt-2 hover:text-[#B9C37B] transition">📧 info@srilankaalluringtours.com</a>
            </div>
        </div>
    </div>

    <div class="bg-[#5A6857] text-center py-4 lora-">
        <p class="text-black">© 2025 JAAN Network (Pvt) Ltd. | All rights reserved.</p>
    </div>
</footer>

<!-- Include FontAwesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- WhatsApp Widget Configuration -->
<script>
    SimpleWhatsappWidget({
        "message": "Hello! How can we help you with your Sri Lanka tour?",
        "number": "+94776509918",
        "position": "right",
        "popupMessage": "Chat with us on WhatsApp!",
    });
</script>

<!-- Floating Contact Buttons -->
<style>
    .floating-contact-buttons {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 40;
    }
    
    .contact-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        transition: transform 0.3s, box-shadow 0.3s;
        animation: slideIn 0.5s ease-out forwards;
    }
    
    .contact-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 16px rgba(0,0,0,0.4);
    }
    
    .whatsapp-btn {
        background-color: #25d366;
        color: white;
    }
    
    .phone-btn {
        background-color: #0078d4;
        color: white;
    }
    
    .email-btn {
        background-color: #ea4335;
        color: white;
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .contact-btn:nth-child(2) {
        animation-delay: 0.1s;
    }
    
    .contact-btn:nth-child(3) {
        animation-delay: 0.2s;
    }
</style>

<div class="floating-contact-buttons">
    <a href="https://wa.me/94776509918?text=Hello!%20I%20would%20like%20to%20know%20more%20about%20your%20tour%20packages" 
       target="_blank" rel="noopener noreferrer" 
       class="contact-btn whatsapp-btn" 
       title="Chat with us on WhatsApp">
        <i class="ri-whatsapp-fill"></i>
    </a>
    <a href="tel:+94776509918" 
       class="contact-btn phone-btn" 
       title="Call us now">
        <i class="ri-phone-fill"></i>
    </a>
    <a href="mailto:info@srilankaalluringtours.com?subject=Tour%20Inquiry" 
       class="contact-btn email-btn" 
       title="Send us an email">
        <i class="ri-mail-fill"></i>
    </a>
</div>
