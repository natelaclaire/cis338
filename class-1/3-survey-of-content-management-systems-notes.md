---
layout: default
title: "1.3 Survey of Content Management Systems"
---

# 1.3 Survey of Content Management Systems

## Foreword

For most of this course, we will be focusing on the practical: creating a Web site using the WordPress content management system (CMS). Today, though, we are going to take a broader view of the various content management systems available and also discuss some terminology and theory that will help us to better understand why WordPress does things the way that it does.

## Definitions

- **Content** - According to Deane (pronounced "d EE n") Barker in his book **Web Content Management: Systems, Features, and Best Practices**, content is created by humans using an "editorial process" and is intended to be consumed by humans after publication to an audience. The editorial process is subjective, so two teams producing, for example, news articles based on the same data will never create the exact same articles. The editorial process is also iterative, generally requiring multiple refinements and modifications. The published content may be reused, repurposed, reevaluted, and consumed in various ways for years to come - thus, as Barker says, "content is an investment in the future, not a record of the past."
- **Content Management System** - According to Barker, a CMS is "a software package that provides some level of automation for the tasks required to effectively manage content." This can include creating, editing, publishing, and other tasks related to content. Where the content is stored (called the "repository"), where it is published, and how it is edited may be autonomous parts, but we generally consider them part of the system.
- **Content Management** *Discipline* - The discipline of content management is made up of theories, best practices, and accepted patterns. It transcends any specific CMS, which is a tool meant to assist in the theoretical idea of content management. Consequently, while learning how to use a specific CMS might not instantly enable one to use any CMS, the underlying concepts will be transferable and that means that learning a second CMS will be easier than the first.

## Types of Content Management Systems

- **Web content management (WCM)** - these systems manage content intended for publication on a Web site - *this is the focus of this course*
- **Enterprise content management (ECM)** - sometimes called "document management," these systems store business content that may not be published externally, such as incident reports, memos, and other internal documents
- **Digital asset management (DAM)** - used for managing digital assets such as images, audio, and video
- **Records management (RM)** - manages transactional information and other records that are byproducts of business operations, such as sales records, contracts, etc.
- **Learning management systems (LMS)** - manages learning resources and student interactions - Brightspace is an example of an LMS
- **Portals** - aggregates multiple streams of information (such as from multiple types of CMSs) into a unified system - the MyCampus portal is an example

The lines here are very blurry. There are many systems that are classified as one of these but can also serve as another. For example, WordPress is a Web content management system but has plugins that enable it to provide many LMS functions. Additionally, many CMSs interact with other types of CMSs. For example, you might be able to access a DAM system from a Web CMS to find media content and publish it to the Web. Or, you might have an ECM that can push documents to a Web CMS for publication, such as an annual fiscal report that is maintained in the ECM during drafting, editing, and approval processes and then published to a Web site once approved.

## What Does A CMS Do?

- **Control / Keep Track Of Content** - for example, it controls who can see the content, records the state of the content, keeps track of how the content has changed, knows what content is related to what other content, and enables us to search and organize the content
- **Allow Content Reuse** - such as storing an author bio that can be updated in one place and the changes will be reflected at the bottom of all of the author's articles, providing teasers for related articles, etc.
- **Allow Content Automation and Aggregation** - such as providing content via a mobile app in addition to a Web site, providing a feed that can enable content to be promoted on a third party web site, providing abstracts of new content that can be sent in a daily e-newsletter, compiling a set of articles into an ebook or PDF, or managing multiple translations of content
- **Increase Editorial Efficiency** - by controlling the types of content that editors can and can't add, the formatting tools they can use, how the content is structured, automating the editorial workflow and collaboration, automating the publication/distribution process, etc.

## What A CMS Doesn't Do

- **Create Content** - it won't write your content or ensure that your content is good
- **Create Marketing Plans** - the CMS can help with the plan once defined, but a human has to define it
- **Effectively Format Content** - human editors must understand how much bold and italic is too much, when and how to align content, proper hyperlinking practices, proper image placement, etc.
- **Provide Governance** - it may enforce governance and workflow once defined, but humans must provide the instructions; for example, a human must determine who needs to approve articles in a particular category and once that determination has been implemented, the CMS may be able to route a new article in the Politics category to the Political Editor for approval once the author indicates that it is ready for publication

## Web Content Management Systems

Let's take a look at several Web content management systems. Please understand that I am not recommending one system over another. Before selecting a system, you should look at what is available and consider for yourself what is a good fit for a particular project. Even though we are using WordPress during the rest of this course, I don't recommend it for every Web site.

### WordPress

WordPress is actually two separate products.

#### WordPress.org

[WordPress.org](https://wordpress.org/) is the most popular Web CMS software, powering approximately 43% of all Web sites. It is an open source product backed by a large community, including the software developement company Automattic. WordPress.org was originally designed for blogging but has grown into a full-blown Web CMS and is used for a variety of Web sites, including social media sites, ecommerce sites, membership sites, and others. WordPress.org is written in PHP, uses a MySQL database for storing content and settings, and can be downloaded for free and installed on many Web hosting platforms. It is highly customizable through the use of Themes and Plugins. Many hosting platforms offer tools for installing WordPress.org with a few clicks, making it easy to install and keep updated. As we'll see next week, though, even without such tools, installing and updating WordPress is quite simple once you have some basic knowledge.

#### WordPress.com

[WordPress.com](https://wordpress.com/) is a "software as a service" (SaaS) offering from Automattic that is built on the WordPress.org software. The company offers a variety of plans with different limitations. While you can build almost any type of site on WordPress.com, the free and lower-cost plans are very limited and essentially designed to be used for blogging. Additionally, some types of sites, such as membership sites, cannot be created at all. WordPress.com also prohibits installing custom Themes and Plugins, instead offering specific sets of Themes and Plugins based on the plan purchased.

### Joomla

[Joomla](https://www.joomla.org/) is an open source Web CMS built with PHP. It is among the most popular content management systems for enterprise Web sites, powering over 9% of all known business web sites and 3% of all Web sites. One of Joomla's strengths is its user groups and permissions management, enabling fine-grained control over which users can take specific actions over specific content. Joomla is fully customizable using templates (similar to WordPress themes) and extensions (similar to WordPress plugins), but lacks a centralized directory of templates.

### Grav

[Grav](https://getgrav.org/) is an open source Web CMS built with PHP. Unlike WordPress, Grav uses flat-files written in [Markdown](https://www.markdownguide.org/) and [YAML](https://yaml.org/) to store content and data and, therefore, doesn't require a database backend. Grav uses the [Twig](https://twig.symfony.com/) template engine and is built on the [Symfony](https://symfony.com/) PHP framework. Grav supports themes and plugins and can be used for a variety of Web sites, including blogs, ecommerce sites, business sites, and others.

### Ghost

[Ghost](https://ghost.org/) is an open source Web CMS built with JavaScript. Although capable of being used for many types of sites, Ghost comes with email marketing and membership functionality built-in and is best suited for content creators, journalists, and businesses with a strong content marketing strategy. Ghost is highly extendable using themes and offers integrations with many other platforms. Installing Ghost requires a dedicated server or Virtual Private Server (VPS) running Ubuntu Linux, MySQL, NGINX, and Node.js. The non-profit organization behind Ghost is funded through sales of their SaaS platform, which they recommend as the easiest way for the average user to get started.

### Drupal

[Drupal](https://www.drupal.org/) is an open source Web CMS built with PHP and powers some of the largest sites in the world, including Weather.com. Although it can be used to build any type of Web site, from the simple to the complex, Drupal is best suited for complex Web sites requiring custom functionality. There are thousands of free and paid plugins and themes available for Drupal. It is one of the most secure content management systems but is also one of the most complicated to set up, being geared toward developers, and is recommended for organizations with significant technical resources and development teams.

### Umbraco

[Umbraco](https://umbraco.com/) is an open source Web CMS built with C# on ASP.NET Core and is one of the most popular systems built on the Microsoft stack, claiming over 700,000 installations. In addition to the large open source community supporting the product, it is backed by a privately-owned company that pays the bills through paid support services and a cloud-based offering built on Microsoft Azure. Umbraco can be used on both large and small sites but stresses its rich permissions and support for multiple languages and channels, which tend to be of more use to larger sites.

### Wix

[Wix](https://www.wix.com/) is a commercial cloud-based Web site builder. While not as customizable as an open source Web CMS, Wix is well-suited for the user who doesn't want to have to deal with the technology behind the scenes. It can be used to create many different types of Web sites, including blogs, simple business sites, ecommerce sites, and more, and features many templates and integrations.

### HubSpot CMS Hub

[CMS Hub by HubSpot](https://www.hubspot.com/products/cms) is a commercial cloud-based Web CMS from the company that created the concept of [inbound marketing](https://www.hubspot.com/inbound-marketing), in which marketers produce content aimed at educating and building lasting relationships with prospects and customers, increasing long-term value, rather than using the interruptions employed by traditional advertising methods. CMS Hub includes integrations with HubSpot's other marketing, sales, and customer relationship management (CRM) tools. It also includes a marketplace for finding templates and integrations with other apps. It is ideal for growing companies that want to use the inbound marketing methodology as it includes numerous tools that are designed based on those concepts. On a side note, HubSpot provides extensive training regarding the inbound methodology that is available to everyone for free, which you might find helpful as you learn more about building Web sites, even if you don't see yourself as a marketer or have any interest in HubSpot's services.

## Headless Content Management Systems

A headless CMS is a backend-only system designed as a content repository. Unlike a traditional Web content management system, such as those above, a headless CMS doesn't deal with how content is presented or where it is published. As we discussed earlier, while we typically include the repository, the administration, and the publishing tool as all part of a single whole, they may be autonomous parts and a headless CMS is an example that includes only the repository and the administration of the repository. A headless CMS provides an application programming interface (API) to which one or more frontends can connect for publishing purposes. This provides flexibility as the frontend and backend don't need to be based on the same technologies or even know very much about each other. It also improves scalability due to the separation of duties and the ablility to cache API requests. Consider a situation where an organization has content needs to be accessed via a Web site, an iOS app, an Android app, a voice-enabled system, and within a virtual reality environment. These frontends need only be able to talk to the API to gather and present the content as appropriate for that specific frontend, while the headless CMS doesn't need to know anything about the frontends.

Examples of headless content management systems include:

- [Strapi](https://strapi.io/) - an open source JavaScript-based headless CMS with an enterprise self-hosted option and cloud-based offerings
- [Storyblok](https://www.storyblok.com/) - a commercial, cloud-based headless CMS with Digital Asset Manager
- [Sanity](https://www.sanity.io/) - a commercial, cloud-based headless CMS
- [Contentful](https://www.contentful.com/) - a commercial, cloud-based headless CMS

## Ecommerce Platforms

An ecommerce platform provides the tools that are needed for managing an ecommerce business, which generally includes Web CMS functionality. Ecommerce platforms often provide the ability to create content pages, sometimes blog posts, and to manage items that are being sold, in addition to the core functionality of handling the ordering process. Some platforms integrate with other tools to manage payments, calculate shipping and taxes, assist with email and social media marketing, and other important ecommerce-related functions, while other platforms include these as core offerings.

- [PrestaShop](https://prestashop.com/) - an open source PHP-based ecommerce platform with a hosted option
- [Shopify](https://www.shopify.com/) - a cloud-based ecommerce platform with a headless option
- [BigCommerce](https://www.bigcommerce.com/) - a cloud-based ecommerce platform with a headless option
- [Adobe Commerce (formerly Magento)](https://business.adobe.com/products/magento/magento-commerce.html) - a commercial, cloud-based, headless ecommerce platform

## That's Not All

There are so many other content management systems that I couldn't cover here. Some are focused on specific markets and some work especially well with certain platforms. Some are commercial, some open source. Some have strong communities behind and around them, others have very small communities. Each has their strengths and weaknesses and each has their fans. I encourage you to do your own research into other content management systems, considering your specific needs. Whatever you decide, I encourage you to take into account how active the community around a product is and how long the product has been around before implementing it, particularly if you expect to be using the product for a long time. Unfortunately, companies go out of business, and open source developers burn out. If the company behind the product that you choose were to go out of business, what are your options? If there are just a few developers working on that open source product, what happens if they burn out and leave the project, or if the project goes through a period of stagnation? I am by no means suggesting that you only use the most popular content management systems, nor am I suggesting that the list above includes all of the most popular ones, but I want to encourage you to consider these types of questions when you choose a solution for a project outside of this class.

## References

- Balkhi, Syed. "15 Best and Most Popular CMS Platforms in 2024 (Compared)." WPBeginner, WPBeginner LLC, 2 Jan. 2024, <https://www.wpbeginner.com/showcase/best-cms-platforms-compared/>.
- Balkhi, Syed. "WordPress.Com vs WordPress.Org – Which Is Better? (Pros and Cons)." WPBeginner, WPBeginner LLC, 19 Dec. 2023, <https://www.wpbeginner.com/beginners-guide/self-hosted-wordpress-org-vs-free-wordpress-com-infograph/>.
- Barker, Deane. Web Content Management: Systems, Features, and Best Practices. Taiwan, O'Reilly Media, 2016, <https://deanebarker.net/books/squirrel/>.
- Butti, Roberto. "Headless CMS Explained: What Is It? Why Does It Matter?" Storyblok, Storyblok, 1 Dec. 2023, <https://www.storyblok.com/tp/headless-cms-explained>.
- HubSpot. "What is inbound marketing?" HubSpot, HubSpot, <https://www.hubspot.com/inbound-marketing>.
- Smith, Amy Nichol. "10 Best Content Management Software (CMS) Systems of 2024." Forbes, Forbes Magazine, 4 Jan. 2024, <https://www.forbes.com/advisor/business/software/best-content-management-software/>.
- Ueland, Sig. "16 Free Open-Source Content Management Systems." Practical Ecommerce, Practical Ecommerce, 9 Oct. 2022, <https://www.practicalecommerce.com/open-source-content-management-systems>.
