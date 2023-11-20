## Running the MoCal

This application is designed to create a multi-step form using Laravel and Livewire. Follow these steps to run the application locally:

### Prerequisites

- PHP installed on your machine (recommended version: 7.3+)
- Composer installed globally
- Node.js and npm (for asset compilation)

### Installation Steps

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/tech-shiv/MoCal_Livewire_Multistep_Form.git
   ```
2. **Install Dependencies:**
   ```
   cd multi-step-form-app
   composer install
   npm install && npm run dev

3. **Setup Environment:**

    a. Rename `.env.example` file to `.env.`
    
    b. Configure your database settings in the .env file if required.
4. **Generate Application Key:**
    ```
    php artisan key:generate
5. **Run Migration (Optional for this assignment as no database integration is required):**
    ```
    php artisan migrate
6. **Serve the Application:**
    ```
    php artisan serve

7. **Access the Application:**
    Open your web browser and go to http://localhost:8000 to access the multi-step form application.


## Explanation of Form and Livewire Component
### **Form Structure:**
The multi-step form is structured with distinct steps, each gathering specific user information. The form design follows a clear progression, enabling users to navigate forward and backward between steps. Validation rules are implemented to ensure data accuracy and completeness before proceeding to subsequent steps.

### **Livewire Component:**
The form functionality is encapsulated within a Livewire component named Register. This component manages the form's state, including data storage, validation, and step navigation. It defines properties to store user input and methods to handle form submission, validation, and navigation between form steps.

The Livewire component uses two-way data binding (wire:model) to synchronize user input with the component's properties, updating the form's state in real-time as the user interacts with it. Methods within the Livewire component manage the flow between steps, controlling which step is displayed based on user actions (e.g., clicking "Next" or "Previous").

Overall, the Livewire component orchestrates the behavior of the multi-step form, providing a seamless and interactive user experience while handling data validation and submission logic.
