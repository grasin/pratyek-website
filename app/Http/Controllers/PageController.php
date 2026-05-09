<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function features()
    {
        return view('pages.features');
    }

    public function trust()
    {
        return view('pages.trust');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function useCase(string $slug)
    {
        $pages = $this->useCasePages();

        abort_unless(isset($pages[$slug]), 404);

        return view('pages.use-case', [
            'page' => $pages[$slug] + ['slug' => $slug],
            'useCases' => $pages,
        ]);
    }

    public function privacyPolicy()
    {
        return view('pages.legal.privacy-policy');
    }

    public function terms()
    {
        return view('pages.legal.terms');
    }

    public function dpdp()
    {
        return view('pages.legal.dpdp');
    }

    private function useCasePages(): array
    {
        return [
            'bill-reminder-app-india' => [
                'title' => 'Bill Reminder App India - WhatsApp Bill Reminders | Pratyek',
                'description' => 'Forward Indian household bills on WhatsApp and track due dates, owners, paid status, and reminders in the Pratyek Memory dashboard.',
                'ogImage' => '/og/bill-reminder-app-india.png',
                'kicker' => 'Bill reminder app India',
                'h1' => 'Bill reminders for Indian homes, captured from WhatsApp.',
                'lede' => 'Pratyek turns Adani Electricity bills, JioFiber payments, Tata Play renewals, school fees, rent, insurance, and property tax into one shared family dashboard. Send the bill once on WhatsApp, then let the Memory dashboard keep the due date visible.',
                'introLabel' => 'Common bill messages',
                'examples' => [
                    'Adani bill Rs 4,237 due 1 May. Remind me on 28 April.',
                    'JioFiber renews tomorrow. Mark it under home internet.',
                    'School fees for Aarav due next Friday. Add reminder for both of us.',
                    'BMC property tax receipt paid today. File it for this year.',
                ],
                'sections' => [
                    [
                        'heading' => 'From bill PDF to family reminder',
                        'body' => 'Forward a PDF, screenshot, SMS, or plain message. Pratyek extracts the biller, amount, due date, household member, and status so the reminder is not buried inside chat history.',
                        'items' => ['Electricity, gas, broadband, DTH, society, rent, school fees, property tax', 'Owner, due date, reminder date, paid status, and notes', 'Works for typed messages, forwards, and practical Hinglish instructions'],
                    ],
                    [
                        'heading' => 'Made for how Indian families actually pay',
                        'body' => 'Pratyek does not auto-pay or handle payment credentials. It remembers, nudges, and files the receipt after you pay on UPI, net banking, biller apps, society portals, or wherever your family already pays.',
                        'items' => ['Paid, unpaid, partial, and recurring bill states', 'Receipt filing for future reference', 'Shared visibility for couples, parents, and household managers'],
                    ],
                    [
                        'heading' => 'One view for recurring household expenses',
                        'body' => 'The Memory dashboard gives the family a clean bill list instead of scattered reminders across phones. That helps every Indian household avoid missed due dates without changing its payment habits.',
                        'items' => ['Calendar and list views', 'Search by biller, member, amount, or month', 'Useful for nuclear families, joint families, and rented homes'],
                    ],
                ],
                'faqs' => [
                    ['q' => 'Is Pratyek a bill payment app?', 'a' => 'No. Pratyek is a bill reminder app and household dashboard. It reminds you and files receipts, while payments stay with the bank, UPI app, biller, or portal you already trust.'],
                    ['q' => 'Can it track paid bills too?', 'a' => 'Yes. Send a paid receipt or a message like "paid Tata Play today" and Pratyek can keep the status and receipt reference in the Memory dashboard.'],
                    ['q' => 'Does the whole family see the bill list?', 'a' => 'The dashboard is designed for shared family visibility, so the right people can see what is due, what is paid, and what needs attention.'],
                ],
            ],
            'warranty-tracker-india' => [
                'title' => 'Warranty Tracker India - Appliance and Asset Tracking | Pratyek',
                'description' => 'Track appliance warranties, purchase bills, AMC visits, vehicle renewals, and home assets from WhatsApp in the Pratyek Memory dashboard.',
                'ogImage' => '/og/warranty-tracker-india.png',
                'kicker' => 'Warranty tracker India',
                'h1' => 'A warranty tracker for every Indian home asset.',
                'lede' => 'Pratyek helps families remember appliance warranties, AMC schedules, vehicle insurance, service visits, and purchase bills. Send the photo or invoice on WhatsApp, then retrieve it from the Memory dashboard when something stops working.',
                'introLabel' => 'Common asset messages',
                'examples' => [
                    'New LG fridge bought today. Warranty 1 year, compressor 10 years.',
                    'AC service done by CoolCare. Next visit in six months.',
                    'Honda Activa insurance renews on 22 July.',
                    'Water purifier AMC paid. Store invoice and next service date.',
                ],
                'sections' => [
                    [
                        'heading' => 'Receipts and warranties stay findable',
                        'body' => 'Pratyek turns purchase invoices, bill photos, and warranty notes into structured asset records. You can search by product, room, brand, service provider, expiry date, or family member.',
                        'items' => ['Appliances, vehicles, electronics, furniture, property items, and home services', 'Warranty date, AMC date, bill reference, service contact, and notes', 'Useful when the service centre asks for the invoice after two years'],
                    ],
                    [
                        'heading' => 'Service reminders before breakdowns become urgent',
                        'body' => 'For AC, water purifier, car, bike, inverter, laptop, and other assets, the dashboard helps track service cycles and renewal dates before the family has to search old chats.',
                        'items' => ['AMC renewals and service visit history', 'Insurance and PUC reminders for vehicles', 'Technician contacts and last-visit notes'],
                    ],
                    [
                        'heading' => 'Built for Indian homes with many shared assets',
                        'body' => 'Every home has a different way of remembering things. Pratyek lets the family keep asset information in one place while still using WhatsApp as the capture surface.',
                        'items' => ['Room-wise and category-wise tracking', 'Family-friendly search and reminders', 'No Aadhaar, PAN, or passport image storage'],
                    ],
                ],
                'faqs' => [
                    ['q' => 'Can Pratyek store appliance bills?', 'a' => 'Yes. You can forward the invoice or bill image so the Memory dashboard can keep the purchase date, warranty details, and reference.'],
                    ['q' => 'Can it remind me before warranty expiry?', 'a' => 'Yes. Warranty and AMC dates can become reminders, so the family knows before a warranty, service contract, or insurance policy expires.'],
                    ['q' => 'Is this only for appliances?', 'a' => 'No. It also works for vehicles, electronics, property details, recurring service contacts, and other household assets.'],
                ],
            ],
            'maid-salary-tracker' => [
                'title' => 'Maid Salary Tracker - Household Staff Attendance | Pratyek',
                'description' => 'Track maid salary, staff attendance, leaves, bonuses, and monthly payments on WhatsApp with Pratyek for Indian households.',
                'ogImage' => '/og/maid-salary-tracker.png',
                'kicker' => 'Maid salary tracker',
                'h1' => 'Maid salary and household staff tracking from simple WhatsApp notes.',
                'lede' => 'Pratyek helps Indian households track maid salary, cook payments, driver attendance, nanny leaves, bonuses, and monthly staff notes without a spreadsheet. Message what happened today, then review it in the Memory dashboard.',
                'introLabel' => 'Common staff messages',
                'examples' => [
                    'Mala came today, left early at 3 pm.',
                    'Paid cook Rs 6,000 salary for April.',
                    'Driver on leave tomorrow. Mark unpaid leave.',
                    'Diwali bonus Rs 2,500 paid to maid.',
                ],
                'sections' => [
                    [
                        'heading' => 'A staff salary tracker that starts in chat',
                        'body' => 'No one wants to open a spreadsheet after the maid leaves. Pratyek accepts quick WhatsApp notes and turns them into attendance, salary, leave, and payment records.',
                        'items' => ['Maid, cook, driver, nanny, nurse, gardener, car washer, and guard', 'Monthly salary, partial payments, advances, deductions, and bonuses', 'Attendance, leave type, visit notes, and month-end summary'],
                    ],
                    [
                        'heading' => 'Helpful for month-end family conversations',
                        'body' => 'When salary day arrives, the family can check what was paid, what is due, and what leaves were marked. It reduces memory fights and makes household work more transparent.',
                        'items' => ['Paid, due, partial, and advance payment states', 'Leave history and attendance notes', 'Per-staff detail pages in the Memory dashboard'],
                    ],
                    [
                        'heading' => 'Designed for Indian household realities',
                        'body' => 'Staff arrangements differ by city, language, and home. Pratyek is flexible enough for daily help, alternate-day help, live-in support, and multiple staff members.',
                        'items' => ['Voice notes and Indian-English messages', 'Festival bonus history', 'ID reference flow that points to DigiLocker instead of storing sensitive documents'],
                    ],
                ],
                'faqs' => [
                    ['q' => 'Can Pratyek track maid attendance?', 'a' => 'Yes. Send quick notes like "Mala did not come today" or "maid came half day" and Pratyek can reflect that in staff records.'],
                    ['q' => 'Can it track maid salary paid in cash?', 'a' => 'Yes. Pratyek tracks the record of payment, not the payment method. You can log cash, UPI, partial, advance, or bonus notes.'],
                    ['q' => 'Can drivers and cooks be tracked too?', 'a' => 'Yes. The Staff surface supports common household roles including maid, cook, driver, nanny, nurse, gardener, guard, and car washer.'],
                ],
            ],
            'family-organizer-india' => [
                'title' => 'Family Organizer India - Shared Family Dashboard | Pratyek',
                'description' => 'A family organizer and organiser for Indian homes: shared tasks, reminders, bills, services, staff, and family records from WhatsApp.',
                'ogImage' => '/og/family-organizer-india.png',
                'kicker' => 'Family organizer India',
                'h1' => 'A shared family organizer for Indian households.',
                'lede' => 'Pratyek gives every Indian family a practical dashboard for shared tasks, reminders, bills, services, staff, family details, contacts, health notes, and occasions. Chat on WhatsApp, then manage the home from the Memory dashboard.',
                'introLabel' => 'Common family organizer messages',
                'examples' => [
                    'Remind papa about cardiologist appointment on Tuesday.',
                    'Add school fee due date for Tara and remind both parents.',
                    'Create shopping task: milk, atta, detergent, batteries.',
                    'Save society office number and plumber number for home.',
                ],
                'sections' => [
                    [
                        'heading' => 'The family dashboard for daily home work',
                        'body' => 'Pratyek brings together the small but important work of running a home. It is a family management app for India that starts with WhatsApp because that is where household coordination already happens.',
                        'items' => ['Shared reminders, family tasks, shopping lists, and due dates', 'Bills, assets, services, staff, and family records', 'Contacts, occasions, health notes, and document references'],
                    ],
                    [
                        'heading' => 'For messy homes and super-organised families',
                        'body' => 'Some homes need help remembering one bill. Some want a proper household operating rhythm. Pratyek works either way: one WhatsApp message can become structure without asking the family to change habits.',
                        'items' => ['Nuclear families, joint families, couples, elder care homes, and rented homes', 'Works with the Indian-English and regional-language mix families use', 'Simple enough to begin with one reminder'],
                    ],
                    [
                        'heading' => 'A home productivity tool, not office software',
                        'body' => 'Pratyek is focused on household productivity: bill dates, staff payments, school deadlines, service visits, appliance warranty dates, and the daily work that keeps a home moving.',
                        'items' => ['No corporate project-management clutter', 'Dashboard categories that match real Indian households', 'WhatsApp-first capture with dashboard-based retrieval'],
                    ],
                ],
                'faqs' => [
                    ['q' => 'Is Pratyek a family organizer or family organiser?', 'a' => 'Yes. Both search terms fit. Pratyek is built as a family organizer for Indian homes, with WhatsApp capture and a shared Memory dashboard.'],
                    ['q' => 'Does every family member need a new app?', 'a' => 'No. WhatsApp is the capture surface. The Memory dashboard opens in the browser when the family needs to review and manage everything.'],
                    ['q' => 'Is it only for highly organised families?', 'a' => 'No. Pratyek is built for every Indian home, including homes where information is currently scattered across chats, calls, and one person\'s memory.'],
                ],
            ],
            'whatsapp-household-assistant' => [
                'title' => 'WhatsApp Household Assistant India | Pratyek',
                'description' => 'Pratyek is a WhatsApp household assistant for Indian families: send bills, voice notes, reminders, staff notes, and service updates to build a Memory dashboard.',
                'ogImage' => '/og/whatsapp-household-assistant.png',
                'kicker' => 'WhatsApp household assistant',
                'h1' => 'A WhatsApp household assistant that turns chat into a dashboard.',
                'lede' => 'Just chat with Pratyek on WhatsApp. Send a bill, voice note, service update, staff salary note, or family reminder, and Pratyek turns it into a sophisticated Memory dashboard your household can actually manage.',
                'introLabel' => 'Common WhatsApp assistant messages',
                'examples' => [
                    'Remind me to book gas cylinder on the 5th every month.',
                    'This washing machine bill has 2-year warranty. File it.',
                    'Milk subscription paused from Monday to Friday.',
                    'Mom medicine refill due next Sunday. Remind me three days before.',
                ],
                'sections' => [
                    [
                        'heading' => 'WhatsApp is the input, the dashboard is the memory',
                        'body' => 'Indian families already run on WhatsApp. Pratyek uses that habit as the capture surface, then stores structured records in the Memory dashboard for retrieval, reminders, and coordination.',
                        'items' => ['Text, forwards, PDFs, screenshots, and voice notes', 'Reminders, tasks, bills, assets, services, staff, and family records', 'Searchable records instead of endless scrolling'],
                    ],
                    [
                        'heading' => 'Funny simple on the outside, serious inside',
                        'body' => 'The experience is simple: send the messy household message and get clean structure. Behind the scenes, Pratyek extracts dates, amounts, people, services, and next actions for the family.',
                        'items' => ['Useful for bill reminders, warranty tracking, shared tasks, and staff salary tracking', 'Works with practical Indian-English instructions', 'Built around household privacy and India data residency'],
                    ],
                    [
                        'heading' => 'Made for every Indian household',
                        'body' => 'Pratyek means every. The product is for every home that wants less mental load and more family coordination without forcing everyone into a new app habit.',
                        'items' => ['Start with one WhatsApp message', 'Review everything later in the Memory dashboard', 'Keep family work visible, searchable, and shareable'],
                    ],
                ],
                'faqs' => [
                    ['q' => 'Is Pratyek a WhatsApp bot?', 'a' => 'Pratyek behaves like a WhatsApp contact for capture, but the product is broader: it creates structured household records and a Memory dashboard for the family.'],
                    ['q' => 'Can I send voice notes?', 'a' => 'Yes. Voice notes can be used for practical household updates, including bills, staff notes, reminders, services, and family tasks.'],
                    ['q' => 'Can it join my family WhatsApp group?', 'a' => 'No. Pratyek uses a separate chat so your existing family group stays private and untouched.'],
                ],
            ],
        ];
    }
}
